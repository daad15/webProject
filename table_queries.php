<!DOCTYPE html>
<html dir="rtl">
<head>
	<title>Suize Guide</title>
<!--
	<link rel="stylesheet" type="text/css" href="tableStyle.css">
-->
</head>
<body>

<?php
	//connection
	$con = mysqli_connect("localhost","root","","size_guide")
	or die ( mysqli_connect_error());

//						 *************	Children Size 	**************
//QUERY: baby (cm)
		$baby_cm = mysqli_query($con,
			"SELECT b_age,b_weight_kg,b_height_cm,b_us
			FROM baby")
		or die ( mysqli_connect_error());

//QUERY: baby (inch)
		$baby_inch = mysqli_query($con,
			"SELECT b_age,b_weight_lb,b_height_in,b_us
			FROM baby")
		or die ( mysqli_connect_error());

//QUERY: babay beany (cm)
		$baby_beany_cm = mysqli_query($con,
			"SELECT bb_age,bb_head_cm,bb_int
			FROM baby_beany")
		or die ( mysqli_connect_error());

//QUERY: babay beany (inch)
		$baby_beany_inch = mysqli_query($con,
			"SELECT bb_age,bb_head_in,bb_int
			FROM baby_beany")
		or die ( mysqli_connect_error());

//QUERY: toddler (cm)
		$toddler_cm = mysqli_query($con,
			"SELECT t_age,t_height_cm,t_weight_kg,t_us,t_uk,t_eur
			FROM toddler")
		or die ( mysqli_connect_error());

//QUERY: toddler (inch)
		$toddler_inch = mysqli_query($con,
			"SELECT t_age,t_height_in,t_weight_lb,t_us,t_uk,t_eur
			FROM toddler")
		or die ( mysqli_connect_error());

//QUERY: boys (cm)
		$boy_cm = mysqli_query($con,
			"SELECT b_height_cm,b_chest_cm,b_waist_cm,b_hips_cm,b_us,b_uk,b_eur,b_int
			FROM ch_boy")
		or die ( mysqli_connect_error());

//QUERY: boys (inch)
		$boy_inch = mysqli_query($con,
			"SELECT b_height_in,b_chest_in,b_waist_in,b_hips_in,b_us,b_uk,b_eur,b_int
			FROM ch_boy")
		or die ( mysqli_connect_error());

//QUERY: girls (cm)
		$girl_cm = mysqli_query($con,
			"SELECT g_height_cm,g_chest_cm,g_waist_cm,g_hips_cm,g_us,g_uk,g_eur,g_int
			FROM ch_girl")
		or die ( mysqli_connect_error());

//QUERY: girls (inch)
		$girl_inch = mysqli_query($con,
			"SELECT g_height_in,g_chest_in,g_waist_in,g_hips_in,g_us,g_uk,g_eur,g_int
			FROM ch_girl")
		or die ( mysqli_connect_error());

//QUERY: children shoes (cm)
		$child_shoes_cm = mysqli_query($con,
			"SELECT chsh_age,chsh_feet_cm,chsh_us,chsh_uk,chsh_eur,chsh_jp
			FROM ch_shoes")
		or die ( mysqli_connect_error());

//QUERY: children shoes (inch)
		$child_shoes_inch = mysqli_query($con,
			"SELECT chsh_age,chsh_feet_in,chsh_us,chsh_uk,chsh_eur,chsh_jp
			FROM ch_shoes")
		or die ( mysqli_connect_error());

//						 *************	Women Size 	**************
//QUERY: women tops (cm)
	$women_tops_cm = mysqli_query($con,
		"SELECT w_int,w_eur,w_uk,w_us,w_bust_cm,w_waist_cm,w_hips_cm
		FROM women_size LIMIT 8 OFFSET 2") or
	die( mysqli_connect_error());

//QUERY: women tops (inch)
	$women_tops_inch = mysqli_query($con,
		"SELECT w_int,w_eur,w_uk,w_us,w_bust_in,w_waist_in,w_hips_in
		FROM women_size LIMIT 8 OFFSET 2")
	or die( mysqli_connect_error());

//QUERY: women dress (cm)
	$women_dress_cm = mysqli_query($con,
		"SELECT w_int, w_eur, w_uk, w_us, w_bust_cm, w_waist_cm, w_hips_cm
		FROM women_size LIMIT  8 OFFSET 2")
	or die( mysqli_connect_error());

//QUERY: women dress (inch)
	$women_dress_inch = mysqli_query($con,
		"SELECT w_int, w_eur, w_uk, w_us, w_bust_in, w_waist_in, w_hips_in
		FROM women_size LIMIT  8 OFFSET 2")
	or die( mysqli_connect_error());

//QUERY : women skirts (cm)
	$women_skirts_cm = mysqli_query($con,
		"SELECT w_int, w_eur, w_uk, w_us, w_waist_cm, w_hips_cm
		FROM women_size LIMIT 8 OFFSET 2")
	or die( mysqli_connect_error());

//QUERY : women skirts (inch)
	$women_skirts_inch = mysqli_query($con,
		"SELECT w_int, w_eur, w_uk, w_us, w_waist_in, w_hips_in
		FROM women_size LIMIT 8 OFFSET 2")
	or die( mysqli_connect_error());

//QUERY : women pants (cm)
	$women_pants_cm = mysqli_query($con,
		"SELECT *
		FROM women_size LIMIT 8 OFFSET 2")
	or die( mysqli_connect_error());

//QUERY : women pants (inch)
	$women_pants_inch = mysqli_query($con,
		"SELECT *
		FROM women_size LIMIT 8 OFFSET 2")
	or die( mysqli_connect_error());

//QUERY : women tight (cm)
		$women_tight_cm = mysqli_query($con,
			"SELECT wt_int,wt_hips_cm,wt_hight_cm
			FROM women_tight")
		or die( mysqli_connect_error());

//QUERY : women tight (inch)
		$women_tight_inch = mysqli_query($con,
			"SELECT wt_int,wt_hips_in,wt_hight_in
			FROM women_tight")
		or die( mysqli_connect_error());

//QUERY : women shoes (cm)
	$women_shoes_cm = mysqli_query($con,
		"SELECT wsh_eur,wsh_uk,wsh_us,wsh_feet_cm
		FROM women_shoes ")
	or die( mysqli_connect_error());

//QUERY : women shoes (inch)
	$women_shoes_inch = mysqli_query($con,
		"SELECT wsh_eur,wsh_uk,wsh_us,wsh_feet_in
		FROM women_shoes ")
	or die( mysqli_connect_error());

//QUERY : women ring (cm)
	$women_ring_cm = mysqli_query($con,
		"SELECT wr_int,wr_cir_mm
		FROM women_ring ")
	or die( mysqli_connect_error());

//QUERY : women ring (inch)
	$women_ring_inch = mysqli_query($con,
		"SELECT wr_int,wr_cir_inch
		FROM women_ring ")
	or die( mysqli_connect_error());

//QUERY: women belt (cm)
	$women_belt_cm = mysqli_query($con,
		"SELECT wb_int,wb_waist_cm
		FROM women_belt ")
	or die( mysqli_connect_error());

//QUERY: women belt (inch)
	$women_belt_inch = mysqli_query($con,
		"SELECT wb_int,wb_waist_in
		FROM women_belt")
	or die( mysqli_connect_error()); ;

//QUERY: women abaya (cm)
	$women_abaya_cm= mysqli_query($con,
		"SELECT wa_size,wa_length_cm,wa_width_cm,wa_sleeve_cm
		FROM women_abaya ")
	or die( mysqli_connect_error());

//QUERY: women abaya (inch)
	$women_abaya_inch = mysqli_query($con,
		"SELECT wa_size,wa_length_in,wa_width_in,wa_sleeve_in
		FROM women_abaya")
	or die( mysqli_connect_error());

//QUERY: women underwear (cm)
		$women_underwear_cm = mysqli_query($con,
			"SELECT wun_waist_cm,wun_hips_cm,wun_uk,wun_int
			FROM women_underwear")
		or die ( mysqli_connect_error());

//QUERY: women underwear (inch)
		$women_underwear_inch = mysqli_query($con,
			"SELECT wun_waist_in,wun_hips_in,wun_uk,wun_int
			FROM women_underwear")
		or die ( mysqli_connect_error());

//QUERY: women bra (cm)
		$women_bra_cm = mysqli_query($con,
			"SELECT wbra_underbust_cm,overbust_cm,wbra_size,cup_size
			FROM women_bra")
		or die ( mysqli_connect_error());

//QUERY: women bra (inch)
		$women_bra_inch = mysqli_query($con,
			"SELECT wbra_underbust_in,overbust_in,wbra_size,cup_size
			FROM women_bra")
		or die ( mysqli_connect_error());

//				 *************	Women maternity Size 	**************
//QUERY : women maternity (cm)
    $women_maternity_cm= mysqli_query($con,
		"SELECT wm_int,wm_bust_cm,wm_under_bust_cm,wm_hips_cm,wm_leg_cm
		FROM women_maternity")
	or die( mysqli_connect_error());

//QUERY : women maternity (inch)
	$women_maternity_inch = mysqli_query($con,
		"SELECT wm_int,wm_bust_in,wm_under_bust_in,wm_hips_in,wm_leg_in
		FROM women_maternity ")
	or die( mysqli_connect_error());

//				 *************	Women -petite- Size 	**************
//QUERY: women -petite- tops (cm)
	$petite_women_tops_cm = mysqli_query($con,
		"SELECT w_int,w_eur,w_uk,w_us,w_bust_cm,w_waist_cm,w_hips_cm
		FROM women_size LIMIT 4")
	or die( mysqli_connect_error());

//QUERY: women -petite- tops (inch)
	$petite_women_tops_inch = mysqli_query($con,
		"SELECT w_int,w_eur,w_uk,w_us,w_bust_in,w_waist_in,w_hips_in
		FROM women_size  LIMIT 4")
	or die( mysqli_connect_error());

//QUERY: women -petite- dress (cm)
	$petite_women_dress_cm = mysqli_query($con,
		"SELECT w_int, w_eur, w_uk, w_us, w_bust_cm, w_waist_cm, w_hips_cm
		FROM women_size LIMIT 4")
	or die( mysqli_connect_error());

//QUERY: women -petite- dress (inch)
	$petite_women_dress_inch = mysqli_query($con,
		"SELECT w_int, w_eur, w_uk, w_us, w_bust_in, w_waist_in, w_hips_in
		FROM women_size LIMIT 4")
	or die( mysqli_connect_error());

//QUERY : women -petite- skirts (cm)
	$petite_women_skirts_cm = mysqli_query($con,
		"SELECT w_int, w_eur, w_uk, w_us, w_waist_cm, w_hips_cm
		FROM women_size LIMIT 4")
	or die( mysqli_connect_error());

//QUERY : women -petite- skirts (inch)
	$petite_women_skirts_inch = mysqli_query($con,
		"SELECT w_int, w_eur, w_uk, w_us, w_waist_in, w_hips_in
		FROM women_size LIMIT 4")
	or die( mysqli_connect_error());

//QUERY : women -petite- pants (cm)
	$petite_women_pants_cm = mysqli_query($con,
		"SELECT *
		FROM women_size LIMIT 4")
	or die( mysqli_connect_error());

//QUERY : women -petite- pants (inch)
	$petite_women_pants_inch = mysqli_query($con,
		"SELECT *
		FROM women_size LIMIT 4")
	or die( mysqli_connect_error());

//				 *************	Women -plus- Size 	**************
//QUERY: women -plus- tops (cm)
	$plus_women_tops_cm = mysqli_query($con,
		"SELECT w_int,w_eur,w_uk,w_us,w_bust_cm,w_waist_cm,w_hips_cm
		FROM women_size LIMIT 4 OFFSET 10")
	or die( mysqli_connect_error());

//QUERY: women -plus- tops (inch)
	$plus_women_tops_inch = mysqli_query($con,
		"SELECT w_int,w_eur,w_uk,w_us,w_bust_in,w_waist_in,w_hips_in
		FROM women_size  LIMIT 4 OFFSET 10")
	or die( mysqli_connect_error());

//QUERY: women -plus- dress (cm)
	$plus_women_dress_cm = mysqli_query($con,
		"SELECT w_int, w_eur, w_uk, w_us, w_bust_cm, w_waist_cm, w_hips_cm
		FROM women_size LIMIT 4 OFFSET 10")
	or die( mysqli_connect_error());

//QUERY: women -plus- dress (inch)
	$plus_women_dress_inch = mysqli_query($con,
		"SELECT w_int, w_eur, w_uk, w_us, w_bust_in, w_waist_in, w_hips_in
		FROM women_size LIMIT 4 OFFSET 10")
	or die( mysqli_connect_error());

//QUERY : women -plus- skirts (cm)
	$plus_women_skirts_cm = mysqli_query($con,
		"SELECT w_int, w_eur, w_uk, w_us, w_waist_cm, w_hips_cm
		FROM women_size LIMIT 4 OFFSET 10")
	or die( mysqli_connect_error());

//QUERY : women -plus- skirts (inch)
	$plus_women_skirts_inch = mysqli_query($con,
		"SELECT w_int, w_eur, w_uk, w_us, w_waist_in, w_hips_in
		FROM women_size LIMIT 4 OFFSET 10")
	or die( mysqli_connect_error());

//QUERY : women -plus- pants (cm)
	$plus_women_pants_cm = mysqli_query($con,
		"SELECT *
		FROM women_size LIMIT 4 OFFSET 10")
	or die( mysqli_connect_error());

//QUERY : women -plus- pants (inch)
	$plus_women_pants_inch = mysqli_query($con,
		"SELECT *
		FROM women_size LIMIT 4 OFFSET 10")
	or die( mysqli_connect_error());

//						 *************	Men Size 	**************
//QUERY: Men tops (cm)
	$men_tops_cm = mysqli_query($con,
		"SELECT mt_int,mt_chest_cm,mt_waist_cm,mt_neckLine_cm,mt_armLength_cm,mt_height_cm,mt_eur,mt_uk
		FROM men_top
		where mt_type = 'R' ")
	or die( mysqli_connect_error());

//QUERY: Men tops (inch)
	$men_tops_inch = mysqli_query($con,
		"SELECT mt_int,mt_chest_in,mt_waist_in,mt_neckLine_in,mt_armLength_in,mt_height_in,mt_eur,mt_uk
		FROM men_top
		where mt_type = 'R'")
	or die( mysqli_connect_error());

//QUERY: Men shirt (cm)
	$men_shirt_cm = mysqli_query($con,
		"SELECT mshr_int,mshr_chest_cm,mshr_waist_cm,mshr_eur,mshr_uk
		FROM men_shirt
		where mshr_type = 'R' ")
	or die( mysqli_connect_error());

//QUERY: Men shirt (inch)
	$men_shirt_inch = mysqli_query($con,
		"SELECT mshr_int,mshr_chest_in,mshr_waist_in,mshr_eur,mshr_uk
		FROM men_shirt
		where mshr_type = 'R'")
	or die( mysqli_connect_error());

//QUERY: Men pants (cm)
	$men_pants_cm = mysqli_query($con,
		"SELECT mp_int,mp_waist_cm,mp_hips_cm,mp_leg_cm,mp_eur,mp_uk
		FROM men_pants
		where mp_type = 'R' ")
	or die( mysqli_connect_error());

//QUERY: Men pants (inch)
	$men_pants_inch = mysqli_query($con,
		"SELECT mp_int,mp_waist_in,mp_hips_in,mp_leg_in,mp_eur,mp_uk
		FROM men_pants
		where mp_type = 'R'")
	or die( mysqli_connect_error());

//QUERY: Men shoes (cm)
	$men_shoes_cm = mysqli_query($con,
		"SELECT msh_feet_cm,msh_eur,msh_uk,msh_us
		FROM men_shoes ")
	or die( mysqli_connect_error());

//QUERY: Men shoes (inch)
	$men_shoes_inch = mysqli_query($con,
		"SELECT msh_feet_in,msh_eur,msh_uk,msh_us
		FROM men_shoes ")
	or die( mysqli_connect_error());

//QUERY: Men belt (cm)
	$men_belt_cm = mysqli_query($con,
		"SELECT mb_waist_cm,mb_int
		FROM men_belt ")
	or die( mysqli_connect_error());

//QUERY: Men belt (inch)
	$men_belt_inch = mysqli_query($con,
		"SELECT mb_waist_in, mb_int
		FROM men_belt ")
	or die( mysqli_connect_error());

//QUERY: Men hat (cm)
	$men_hat_cm = mysqli_query($con,
		"SELECT mh_head_cm,mh_int
		FROM men_hat ")
	or die( mysqli_connect_error());

//QUERY: Men hat (inch)
	$men_hat_inch = mysqli_query($con,
		"SELECT mh_head_in, mh_int
		FROM men_hat ")
	or die( mysqli_connect_error());

//QUERY: Men underwear (cm)
	$men_underwear_cm = mysqli_query($con,
		"SELECT mun_int, mun_waist_cm, mun_eur, mun_uk
		FROM men_underwear ")
	or die( mysqli_connect_error());

//QUERY: Men underwear (inch)
	$men_underwear_inch = mysqli_query($con,
		"SELECT mun_int, mun_waist_in, mun_eur, mun_uk
		FROM men_underwear ")
	or die( mysqli_connect_error());

//QUERY: Men shemagh
	$men_shemagh = mysqli_query($con,
		"SELECT mshm_size, mshm_height_cm
		FROM men_shemagh ")
	or die( mysqli_connect_error());

//						 *************	Men & Youth & Child Thoub 	**************
//QUERY: men thoub
		$men_thoub = mysqli_query($con,
			"SELECT mth_size, mth_length, mth_chest
			FROM men_thoub limit 34")
		or die ( mysqli_connect_error());
		$men_thoub_more = mysqli_query($con,
			"SELECT mth_size, mth_length, mth_chest
			FROM men_thoub limit 30 OFFSET 34")
		or die ( mysqli_connect_error());

//QUERY: youth thoub
		$youth_thoub = mysqli_query($con,
			"SELECT mth_size, mth_length, mth_chest
			FROM youth_thoub limit 42")
		or die ( mysqli_connect_error());
		$youth_thoub_more = mysqli_query($con,
			"SELECT mth_size, mth_length, mth_chest
			FROM youth_thoub limit 17 offset 42")
		or die ( mysqli_connect_error());

//QUERY: child thoub
		$child_thoub = mysqli_query($con,
			"SELECT mth_size, mth_length, mth_chest
			FROM child_thoub limit 12")
		or die ( mysqli_connect_error());
		$child_thoub_more = mysqli_query($con,
			"SELECT mth_size, mth_length, mth_chest
			FROM child_thoub limit 18 offset 12")
		or die ( mysqli_connect_error());

//						 *************	Men long Size 	**************
//QUERY: Men -long- tops (cm)
	$long_men_tops_cm = mysqli_query($con,
		"SELECT mt_int,mt_chest_cm,mt_waist_cm,mt_neckLine_cm,mt_armLength_cm,mt_height_cm,mt_eur,mt_uk
		FROM men_top
		where mt_type = 'L' ")
	or die( mysqli_connect_error());
//QUERY: Men -long- tops (inch)
	$long_men_tops_inch = mysqli_query($con,
		"SELECT mt_int,mt_chest_in,mt_waist_in,mt_neckLine_in,mt_armLength_in,mt_height_in,mt_eur,mt_uk
		FROM men_top
		where mt_type = 'L'")
	or die( mysqli_connect_error());

//QUERY: Men -long- shirt (cm)
	$long_men_shirt_cm = mysqli_query($con,
		"SELECT mshr_int,mshr_chest_cm,mshr_waist_cm,mshr_neckLine_cm,mshr_armLength_cm,mshr_height_cm,mshr_eur,mshr_uk
		FROM men_shirt
		where mshr_type = 'L' ")
	or die( mysqli_connect_error());

//QUERY: Men -long- shirt (inch)
	$long_men_shirt_inch = mysqli_query($con,
		"SELECT mshr_int,mshr_chest_in,mshr_waist_in,mshr_neckLine_in,mshr_armLength_in,mshr_height_in,mshr_eur,mshr_uk
		FROM men_shirt
		where mshr_type = 'L'")
	or die( mysqli_connect_error());

//QUERY: Men -long- pants (cm)
	$long_men_pants_cm = mysqli_query($con,
		"SELECT mp_int,mp_waist_cm,mp_hips_cm,mp_leg_cm,mp_height_cm,mp_eur,mp_uk
		FROM men_pants
		where mp_type = 'L' ")
	or die( mysqli_connect_error());

//QUERY: Men -long- pants (inch)
	$long_men_pants_inch = mysqli_query($con,
		"SELECT mp_int,mp_waist_in,mp_hips_in,mp_leg_in,mp_height_in,mp_eur,mp_uk
		FROM men_pants
		where mp_type = 'L'")
	or die( mysqli_connect_error());

//						 *************	Men -short- Size 	**************
//QUERY: Men -short- tops (cm)
	$short_men_tops_cm = mysqli_query($con,
		"SELECT mt_int,mt_chest_cm,mt_waist_cm,mt_neckLine_cm,mt_armLength_cm,mt_height_cm,mt_eur,mt_uk
		FROM men_top
		where mt_type = 'S' ")
	or die( mysqli_connect_error());

//QUERY: Men -short- tops (inch)
	$short_men_tops_inch = mysqli_query($con,
		"SELECT mt_int,mt_chest_in,mt_waist_in,mt_neckLine_in,mt_armLength_in,mt_height_in,mt_eur,mt_uk
		FROM men_top
		where mt_type = 'S'")
	or die( mysqli_connect_error());

//QUERY: Men -short- shirt (cm)
	$short_men_shirt_cm = mysqli_query($con,
		"SELECT mshr_int,mshr_chest_cm,mshr_waist_cm,mshr_neckLine_cm,mshr_armLength_cm,mshr_height_cm,mshr_eur,mshr_uk
		FROM men_shirt
		where mshr_type = 'S' ")
	or die( mysqli_connect_error());

//QUERY: Men -short- shirt (inch)
	$short_men_shirt_inch = mysqli_query($con,
		"SELECT mshr_int,mshr_chest_in,mshr_waist_in,mshr_neckLine_in,mshr_armLength_in,mshr_height_in,mshr_eur,mshr_uk
		FROM men_shirt
		where mshr_type = 'S'")
	or die( mysqli_connect_error());

//QUERY: Men -short- pants (cm)
	$short_men_pants_cm = mysqli_query($con,
		"SELECT mp_int,mp_waist_cm,mp_hips_cm,mp_leg_cm,mp_height_cm,mp_eur,mp_uk
		FROM men_pants
		where mp_type = 'S' ")
	or die( mysqli_connect_error());

//QUERY: Men -short- pants (inch)
	$short_men_pants_inch = mysqli_query($con,
		"SELECT mp_int,mp_waist_in,mp_hips_in,mp_leg_in,mp_height_in,mp_eur,mp_uk
		FROM men_pants
		where mp_type = 'S'")
	or die( mysqli_connect_error());

 ?>

</body>
</html>
