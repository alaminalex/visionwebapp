<?php
	global $pageObject;
		
	if(!isset($pageObject) || !array_key_exists("custom1",$tabparams))
		return;
	
	$arrTabs = array();
	
	// get data source table name
	if($pageObject->tName)
		$table = $pageObject->tName;
	else
		$table = $strTableName;
	
	// get short table name
	if($pageObject->shortTableName)
		$shortTableName = $pageObject->shortTableName;
	else
		$shortTableName = $pageObject->pSet->getShortTableName();
	
	// get tabs arr in accordance with page type
	$arrTabs = $pageObject->getArrTabs();
	
	$tabGroupId = 0;
	$tabType = 0;
	for($i=0;$i<count($arrTabs);$i++)
	{
		if($arrTabs[$i]['tabId']==$tabparams["custom1"])
		{
			$tabGroupId = $arrTabs[$i]['tabGroup'];
			$tabType = $arrTabs[$i]['nType'];
			break;
		}
	}
	if(!$tabGroupId && !$tabType)
		return;
	
	// for pdf mode
	$tabAsSection = $pageObject->pdfMode && !$tabType;
	
	if($tabAsSection)
	{
		$i = 0;
		$arrCount = count($arrTabs);
	}
	else
	{
		$arrCount = $i + 1;
	}
	
	//show section
	if($tabType || $tabAsSection)
	{
		while($i<$arrCount)
		{
			if($arrTabs[$i]['tabGroup']!==$tabGroupId)
			{
				$i++;
				continue;
			}
			if($arrTabs[$i]['expandSec'] || $pageObject->pdfMode)
			{
				$src = 'images/minus.gif';
				$hiddenStyle = '';
			}
			else
			{
				$src = 'images/plus.gif';
				$hiddenStyle = 'style="display: none;"';
			}
			$cssStyle = '';
			$layout = GetPageLayout($shortTableName, $pageObject->pageType, $arrTabs[$i]['tabId']);
			if($layout)
			{
				$cssStyle = ' '.$layout->style." page-".$layout->name;
				$pageObject->AddCSSFile($layout->getCSSFiles(isRTL(), isMobile()));
			}
			echo '<img id="section_'.$arrTabs[$i]['tabId'].$pageObject->id.'Butt" border="0" src="'.GetRootPathForResources($src).'" valign="middle" alt="*" /> 
				  '.$arrTabs[$i]['tabName'].'<br>
					<div id="section_'.$arrTabs[$i]['tabId'].$pageObject->id.'" class="sectionFrame rnr-pagewrapper'.$cssStyle.'" '.$hiddenStyle.' >';
			$xt->displayPartial(GetMobilePrefixForTemplate().GetTemplateName($shortTableName, $pageObject->pageType."_".$arrTabs[$i]['tabId']));
			echo '</div>';
			
			$i++;
		}
	}
	else{
			//show tab group
			?>
			<div id="tabGroup_<?php echo $tabparams["custom1"].$pageObject->id?>" class="yui-navset">
				<ul class="yui-nav">
				<?php 
					$countTabs = 0;
					for($i=0;$i<count($arrTabs);$i++)
						if($arrTabs[$i]['tabGroup']==$tabGroupId)
						{								
							echo '<li class="rnr-tab'.(++$countTabs==1 ? ' selected' : '').' rnr-tab-navigation">';
							echo '<a href="#'.$arrTabs[$i]['tabId'].'"><span>'.$arrTabs[$i]['tabName'].'</span></a></li>';
						}
				?>
				</ul>
				<div class="yui-content">
					<?php
						$countTabs = 0;
						for($i=0;$i<count($arrTabs);$i++)
							if($arrTabs[$i]['tabGroup']==$tabGroupId)
							{
								$cssStyle = '';
								$layout = GetPageLayout($shortTableName, $pageObject->pageType, $arrTabs[$i]['tabId']);
								if($layout)
								{
									$cssStyle = ' '.$layout->style." page-".$layout->name;
									$pageObject->AddCSSFile($layout->getCSSFiles(isRTL(), isMobile()));
								}
								if( $countTabs > 0 )
									$cssStyle.= ' rnr-hidden-tab-panel';
									
								$countTabs++;		
								
								echo '<div id="'.$arrTabs[$i]['tabId'].$pageObject->id.'" class="rnr-pagewrapper'.$cssStyle.'">';
								$xt->displayPartial(GetMobilePrefixForTemplate().GetTemplateName($shortTableName, $pageObject->pageType."_".$arrTabs[$i]['tabId']));
								echo "</div>";
							}
					?>
				</div>
			</div>
			<?php
		}
?>