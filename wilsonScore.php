/**
* @param $u  好评数
* @param $n  评论总数
* @param $zP 正态分布的分位数  zP一般取值2即可，即95%的置信度。
* @return $s 威尔逊得分
*/
function wilsonScore($u,$n,$zP){
	$p = $u/$n;
	echo "好评率为：".$p;
	$s = ($p + (pow($zP,2)/(2.*$n))-(($zP/(2.*$n)) *Sqrt(4.*$n*(1.-$p)*$p+Pow($zP,2)))/(1.+Pow($zP,2)/$n));
	echo "威尔逊得分为: ".$s;
	return $s;
}

wilsonScore(500, 1000, 2);

//好评率为：0.5威尔逊得分为: 0.47044027984511
