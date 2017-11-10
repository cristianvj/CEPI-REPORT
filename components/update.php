<?php
	$pageName=""; 
	include('header.php');
	include('consulta.php');

	mysql_query("UPDATE `tb_circular` 
		SET 
			`scc_extracting_title` = '$_POST[txt_extracting_title]',
			`scc_extracting_content` = '$_POST[txa_extracting_content]',
			`scc_extracting_nro_one` = '$_POST[scc_extracting_nro_one]', 
			`scc_extracting_nro_two` = '$_POST[scc_extracting_nro_two]', 
			`scc_extracting_nro_tree` = '$_POST[scc_extracting_nro_tree]', 
			`scc_worldwide_title` = '$_POST[scc_worldwide_title]', 
			`scc_worldwide_subtitle` = '$_POST[scc_worldwide_subtitle]', 
			`scc_worldwide_chart_one` = '$_POST[scc_worldwide_chart_one]', 
			`scc_worldwide_chart_two` = '$_POST[scc_worldwide_chart_two]', 
			`scc_worldwide_chart_tree` = '$_POST[scc_worldwide_chart_tree]', 
			`scc_worldwide_chart_recycled_one` = '$_POST[scc_worldwide_chart_recycled_one]', 
			`scc_worldwide_chart_recycled_two` = '$_POST[scc_worldwide_chart_recycled_two]', 
			`scc_worldwide_content` = '$_POST[scc_worldwide_content]', 
			`scc_fostering_title` = '$_POST[scc_fostering_title]', 
			`scc_fostering_content` = '$_POST[scc_fostering_content]', 
			`scc_fostering_nbr_one` = '$_POST[scc_fostering_nbr_one]', 
			`scc_fostering_nbr_two` = '$_POST[scc_fostering_nbr_two]', 
			`scc_fostering_nbr_tree` = '$_POST[scc_fostering_nbr_tree]', 
			`scc_fostering_content_two` = '$_POST[scc_fostering_content_two]', 
			`scc_latest_content` = '$_POST[scc_latest_content]', 
			`scc_latest_chart_title` = '$_POST[scc_latest_chart_title]', 
			`scc_latest_chart_subtitle` = '$_POST[scc_latest_chart_subtitle]', 
			`scc_latest_chart_european_one` = '$_POST[scc_latest_chart_european_one]', 
			`scc_latest_chart_european_two` = '$_POST[scc_latest_chart_european_two]', 
			`scc_latest_chart_european_tree` = '$_POST[scc_latest_chart_european_tree]', 
			`scc_latest_chart_european_four` = '$_POST[scc_latest_chart_european_four]', 
			`scc_latest_chart_european_five` = '$_POST[scc_latest_chart_european_five]', 
			`scc_latest_chart_european_six` = '$_POST[scc_latest_chart_european_six]', 
			`scc_latest_chart_european_seven` = '$_POST[scc_latest_chart_european_seven]', 
			`scc_position_title` = '$_POST[scc_position_title]', 
			`scc_position_content_one` = '$_POST[scc_position_content_one]', 
			`scc_position_content_two` = '$_POST[scc_position_content_two]', 
			`footer_content_one` = '$_POST[footer_content_one]', 
			`footer_content_two` = '$_POST[footer_content_two]' 

		WHERE 
			`tb_circular`.`id_circular` = 1", $con) or die(mysql_error());
	
	?>

		<script type="text/javascript">
			alert("Update Successfull");
			window.location.href='<?php echo $ruta ?>templates/circular-admin/index.php';
		</script>

	<?php
	
	//header('Location: '.$ruta.'templates/circular-admin/index.php');

	//UPDATE `tb_circular` SET `scc_extracting_title` = 'Extracting Full Value of Wood Components .', `scc_extracting_content` = 'The life cycle of a paper product is composed of a series of value adding steps, from the extraction of natural resources until the end of the paper product’s life.\r\n\r\nIn the circular economy, the end of the paper product’s life is reconnected with its production by reusing the already extracted resources which are contained in used products.\r\n\r\nMoreover, promoting the use the cascading principle where wood is first used as a raw material to make products, and where recycling is encouraged before the raw material is used to recover energy only when recycling is no longer feasible, is far more economical than burning it immediately for renewable energy', `scc_extracting_nro_one` = '2', `scc_extracting_nro_two` = '2.39', `scc_extracting_nro_tree` = '2', `scc_worldwide_title` = 'A worldwide leader IN paper recycling.', `scc_worldwide_subtitle` = 'Recovery of european print and paper waste products (CEPI statistics).', `scc_worldwide_chart_one` = '7', `scc_worldwide_chart_two` = '23', `scc_worldwide_chart_tree` = '73', `scc_worldwide_chart_recycled_one` = '17', `scc_worldwide_chart_recycled_two` = '85', `scc_worldwide_content` = '<p><strong>Paper recycling in Europe reached the record level of 71.5% in 2015,</strong> keeping fibres longer in the loop and extending the benefits of their renewable origin. Our industry is now seeking to make another move forward with an enhanced rate of 74% by 2020.</p>\r\n\r\n<p>In some regions, recycling rates reaches 75%, which is likely the practical maximum rate.</p>\r\n\r\n<p>Paper is recycled on average 3,5 times a year in Europe, while over 50% of the raw material for Europe&rsquo;s paper industry is recycled paper.</p>\r\n\r\n<p>Some paper products cannot be recovered for recycling because they are kept for long periods of time (books) or archived (records); others are destroyed or contaminated when used (e.g. tissue and hygienic paper).</p>\r\n\r\n<p>Paper cannot be recycled indefinitely as fibres get too short and worn out to be useful in creating a new sheet of paper. Hence, virgin fibre grades are needed to continue the cycle. New fibres come from renewable, sustainably-managed forests, continuing the loop</p>\r\n', `scc_fostering_title` = 'Fostering a European network for industrial symbiosis.', `scc_fostering_content` = 'When different organisations get together in a network to foster eco-innovation and long-term culture change, it is called industrial symbiosis.\r\n\r\nCreating and sharing knowledge through these networks means different parts of the supply chain can share their expertise and together create new solutions for the future which they might not have thought up on their own.\r\n\r\nWhat all synergies have in common is that they reduce costs and generate new value for the companies involved, as well as creating significant environmental benefits such as reduced landfill and greenhouse gases. In addition, the synergies generated through economic activity have further social benefits with the creation of new businesses and jobs\r\n				', `scc_fostering_nbr_one` = '26', `scc_fostering_nbr_two` = '46', `scc_fostering_nbr_tree` = '31', `scc_fostering_content_two` = '<p>The paper and board production process, especially when carried out with paper for recycling as the raw material, leads to the generation of large amounts of side streams --mainly sludge, rejects and process water.</p>\r\n\r\n<p>The REFFIBRE PROJECT (2014-2016) identified a number of side stream valorisation opportunities, either already on the market or in various stages of development. Find out more <a href=\"http://reffibre.eu/news/watch-the-video.html\" target=\"_blank\">here</a></p>\r\n', `scc_latest_content` = '<p><a href=\"http://localhost/CEPI-REPORT/templates/latest/index.php\">Click here</a> to see to see our All Latest Data / Want more detailed data? Become a subscriber <a href=\"http://www.cepi.org/node/13432\" target=\"_blank\">here.</a></p>\r\n', `scc_latest_chart_title` = 'European Recycling Rate in the World.', `scc_latest_chart_subtitle` = 'CEPI Statistics - Status as of 2015.', `scc_latest_chart_european_one` = '73', `scc_latest_chart_european_two` = '72', `scc_latest_chart_european_tree` = '68', `scc_latest_chart_european_four` = '60', `scc_latest_chart_european_five` = '54', `scc_latest_chart_european_six` = '47', `scc_latest_chart_european_seven` = '36', `scc_position_title` = 'Latest position papers.', `scc_position_content_one` = '<p><strong>17.oct.2016</strong><br />\r\n<br />\r\n<a href=\"#\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</a></p>', `scc_position_content_two` = '<p><strong>17.oct.2016</strong><br />\r\n<br />\r\n<a href=\"#\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</a></p>', `footer_content_one` = '<h2>Contact Persons</h2>\r\n\r\n<p>Industrial Policy Director .&nbsp; &nbsp; &nbsp;&nbsp;Statistics Manager</p>\r\n<p>Bernard Lampard .&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Ariane Cr&egrave;vecouer</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Industrial Policy Director .&nbsp; &nbsp; &nbsp;&nbsp;Statistics Manager</p>\r\n\r\n<p>Bernard Lampard &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Ariane Cr&egrave;vecouer</p>\r\n', `footer_content_two` = '<h2>2050 ROADMAP</h2>\r\n\r\n<p><a href=\"https://www.dropbox.com/sh/kava5amd6qxrb7r/AADlUbICEk2OSQofaNrCVLjKa?dl=\" target=\"_blank\">Click here</a> to learn more about our 2050 Roadmap to a low- carbon bioeconomy: Investing in Europe for Industry Transformation</p>\r\n' WHERE `tb_circular`.`id_circular` = 1;
?>