
<svg width="760" height="1000">
	<?php
		$yStart=100;
		$xLeft=80;
		$xRight=450;
		$hBox=50;
		$wBox=140;
		$fontSize=20;
		$wLine=50;
		$hGap=100;
		$yNamePadding=25;
		$xNamePadding=10;
		$rx=15;
	for($i=0;$i<4;$i++){
		$y=$hGap*$i+$yStart;
		$yName=$y+$yNamePadding;
		$xName=$xLeft+$xNamePadding;
  		echo '<rect height="'.$hBox.'" width="'.$wBox.'" y="'.$y.'" x="'.$xLeft.'" stroke="#000" fill="#fff" rx="'.$rx.'"/>';
  		echo '<text xml:space="preserve" text-anchor="start" font-family="Noto Sans JP" font-size="'.$fontSize.'" y="'.$yName.'" x="'.$xName.'" stroke-width="0" stroke="#000" fill="#000000">sadsfa</text>';
	}

	for($i=0;$i<4;$i++){
		$y=$hGap*$i+$yStart;
		$yName=$y+$yNamePadding;
		$xName=$xRight+$wBox-$xNamePadding;
  		echo '<rect height="'.$hBox.'" width="'.$wBox.'" y="'.$y.'" x="'.$xRight.'" stroke="#000" fill="#fff" rx="'.$rx.'"/>';
  		echo '<text xml:space="preserve" text-anchor="end" font-family="Noto Sans JP" font-size="'.$fontSize.'" y="'.$yName.'" x="'.$xName.'" stroke-width="0" stroke="#000" fill="#000000">aaaaaa</text>';
	}

	$lx1=$xLeft+$wBox;
	$rx1=$xRight;
	$y1=($yStart+$hBox/2);
	for($i=0;$i<2;$i++){
		$lx2=$lx1+$wLine;
		$rx2=$rx1-$wLine;
		$y2=$y1+$hGap;
		$line=array($lx1,$y1,$lx2,$y1,$lx2,$y2,$lx1,$y2);
		echo '<polyline points="'.implode(',',$line).'"
            fill="none" stroke="black" />';	
		$line=array($rx1,$y1,$rx2,$y1,$rx2,$y2,$rx1,$y2);
		echo '<polyline points="'.implode(',',$line).'"
            fill="none" stroke="black" />';	
		$y1+=$hGap*2;
	}

	$lx1=$xLeft+$wBox+$wLine;
	$rx1=$xRight-($wLine);
	$y1=$yStart+($hBox/2)+($hGap/2);
	$lx2=$lx1+$wLine;
	$rx2=$rx1-$wLine;
	$y2=$y1+($hBox/2*3)+($hGap);
	$line=array($lx1,$y1,$lx2,$y1,$lx2,$y2,$lx1,$y2);
	echo '<polyline points="'.implode(',',$line).'"
        fill="none" stroke="black" />';	
	$line=array($rx1,$y1,$rx2,$y1,$rx2,$y2,$rx1,$y2);
	echo '<polyline points="'.implode(',',$line).'"
        fill="none" stroke="black" />';	

    $x1=$xLeft+$wBox+($wLine*2);
    $y1=$yStart+($hBox/2)+($hGap/2*3);
    $x2=$xRight-($wLine*2);
	$line=array($x1,$y1,$x2,$y1);
	echo '<polyline points="'.implode(',',$line).'"
        fill="none" stroke="black" />';	
	

	$data=array(
		'yStart'=>600,
		'xLeft'=>$xLeft,
		'xRight'=>$xRight,
		'hBox'=>30,
		'wBox'=>$wBox,
		'fontSize'=>$fontSize,
		'wLine'=>50,
		'hGap'=>40,
		'yNamePadding'=>20,
		'xNamePadding'=>10,
		'rx'=>10,
	);
	echo $this->load->view('pdf_svg_repechage',$data,true);
	?>


</svg>
