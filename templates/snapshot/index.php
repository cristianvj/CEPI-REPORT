<?php
	$pageName = "snapshot";
	include('../../components/header.php');
?>
<body class="body-snapshot">

	<header>
		<a id="cd-logo" href="#0"><img src="<?php echo $ruta; ?>img/public/logo.svg" alt="Homepage"></a>
	</header>
	<div class="div-menu">
		<span class="btn-menu" onclick="openNav()">&#9776;</span>
		<?php include('../../components/menu.php'); ?>
	</div>	

<!-- Contenido -->

	<!-- Banner -->
	<section class="flex banner" id="bannerSec">
		<div class="ImgFlash"></div>
		<div class="flex banner-footer">
			<div class="flex angleDown">
				<a class="ancla" href="#sustainability"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
			</div>
		</div>
	</section>
	<!-- /Banner -->

	<section class="parVerde" id="sustainability">
		<p>Sustainability and competitiveness have to go hand in hand for business to excel, our industry is a leading example of this. Reducing raw material consumption makes both sustainable and economic sense. Using residues from papermaking to produce renewable energy is also a good example. Turning residues from recycling operations into useful products is part of the circular economy that the planet needs to achieve. Our industry addresses these challenges and transforms the future with research and innovation.</p>
		<p>Sustainability is precisely that, a vision on business development based on sustainable practices that address society’s key challenges, on a long lasting basis. The Confederation of European Paper Industries (CEPI) is committed to create new sustainable opportunities in the bioeconomy – one pathway to safeguard the European manfacturing industrial base.</p>
		<p>CEPI organises the European pulp and paper industry and champions its products and achievements. A Brussels-based non-profit making organisation, CEPI’s mission is to promote our members’ business performance through targeted strategies such as organising, monitoring and analysing activities in the areas of environment, energy, forestry, recycling, research and trade. CEPI also aims to boost the knowledge of its members in specific technical areas, and to facilitate the flow of information between companies and associations. </p>
	</section>

	<!-- Seccion 2 -->
	<section class="flex products">
		<h2 class="title">OUR PRODUCTS ARE AT THE CORE OF EVERYDAY LIFE</h2>
		<div class="imgSlide1 animate-in" data-anim-type="fade-in-left">
			<h3><a target="_blank" href="https://www.dropbox.com/sh/f9etu1o7hrk789e/AABY27qaAiaSfO6ZpMC5yLDLa?dl=0"><b>Click here</b></a> to see a whole range of products for everyday life
			<div class="flex angleDown">
				<a class="ancla" href="#production"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
			</div>
			</h3>
		</div>
        <div class="flex contenedor" id="production">
        	<!-- Grafica -->
			<div class="sec-graf1">
	        	<h2>90.8 MILLION TONNES (MT) OF TOTAL PRODUCTION IN 2016</h2>
				<div class="flex graficas">
					<h4>Packaging Paper and Board</h4>
					<div class="graficaInt" id="grafica1_1"></div>
					<h4 class="ttlPorc">49%</h4>
					<h4 class="taLeft">49.6 MT</h4>
				</div>
				<div class="flex graficas grf1_2">
					<h4>Case Materials</h4>
					<div class="graficaInt intGr" id="grafica1_2"></div>
					<h4 class="ttlPorc">29.9%</h4>
					<h4 class="taLeft">28 MT</h4>
				</div>
				<div class="flex graficas grf1_2">
					<h4>Other packaging & paper</h4>
					<div class="graficaInt intGr" id="grafica1_3"></div>
					<h4 class="ttlPorc">14.4%</h4>
					<h4 class="taLeft">4.7 MT</h4>
				</div>
				<div class="flex graficas grf1_2">
					<h4>Wrapping</h4>
					<div class="graficaInt intGr" id="grafica1_4"></div>
					<h4 class="ttlPorc">4.7%</h4>
					<h4 class="taLeft">4.2 MT</h4>
				</div>
					
				<div class="flex abrirSlide2">
					<h4>Examples</h4>
					<img class="flecha1" onclick="openGraf1();" src="<?php echo $ruta; ?>img/public/Flecha.svg">
				</div>
				<div class="flex descripcionItem">
					<h3>49%<br>Packaging paper<br>and board</h3>
					<div class="imgCirculo imgCir-1"></div>
					<div class="flex">
						<div class="enlaceCirculo"></div>
						<div class="finCirculo"></div>
					</div>
					<div class="textoDescrip">
						<h4>Mainly used for wrapping and packaging purposes.</h4>
						<div class="flex lista-descrip">
							<ul>
								<li>Boxes</li>
								<li>Bags</li>
								<li>Packaging</li>
							</ul>
							<ul>
								<li>Wrapping</li>
								<li>Toys and Games</li>
								<li>Product Display</li>
							</ul>
						</div>
					</div>	
				</div>
			</div>
			<!-- Grafica -->
			<div class="sec-graf2">
				<div class="flex graficas">
					<h4>Newsprint, Printing and Writing Paper</h4>
					<div class="graficaInt" id="grafica2_1"></div>
					<h4 class="ttlPorc">15.2%</h4>
					<h4 class="taLeft">12.8 MT</h4>
				</div>
				<div class="flex graficas grf1_2">
					<h4>Coated Paper</h4>
					<div class="graficaInt intGr" id="grafica2_2"></div>
					<h4 class="ttlPorc">15.2%</h4>
					<h4 class="taLeft">12.8 MT</h4>
				</div>
				<div class="flex graficas grf1_2">
					<h4>Uncoated Paper</h4>
					<div class="graficaInt intGr" id="grafica2_3"></div>
					<h4 class="ttlPorc">15.8%</h4>
					<h4 class="taLeft">15.2 MT</h4>
				</div>
				<div class="flex graficas grf1_2">
					<h4>Newsprint</h4>
					<div class="graficaInt intGr" id="grafica2_4"></div>
					<h4 class="ttlPorc">7.8%</h4>
					<h4 class="taLeft">6.5 MT</h4>
				</div>
				<div class="flex abrirSlide2">
					<h4>Examples</h4>
					<img class="flecha2" onclick="openGraf2();" src="<?php echo $ruta?>/img/public/Flecha.svg">
				</div>
				<div class="flex descripcionItem descGraf2">
					<h3>38.8%<br>Newsprint,<br>printing and<br>writing paper</h3>
					<div class="imgCirculo imgCir-2"></div>
					<div class="flex">
						<div class="enlaceCirculo"></div>
						<div class="finCirculo"></div>
					</div>
					<div class="textoDescrip">
						<h4>Represent the sum of newsprint, uncoated mechanical, uncoated woodfree and coated papers.</h4>
						<div class="flex lista-descrip">
							<ul>
								<li>Newspapers</li>
								<li>Magazines</li>
								<li>Books</li>
                                <li>Brochures</li>
							</ul>
							<ul>
								<li>Catalogues</li>
								<li>Flyers</li>
								<li>Envelopes</li>
								<li>Greeting Cards</li>
							</ul>
						</div>
					</div>	
				</div>
			</div>
			<!-- Grafica -->
			<div class="sec-graf3">
				<div class="flex graficas grf1_2">
					<h4>Hygiene Paper</h4>
					<div class="graficaInt" id="grafica3_1"></div>
					<h4 class="ttlPorc">7.8%</h4>
					<h4 class="taLeft">7.3 MT</h4>
				</div>
				<div class="contenido2">
				<div class="flex abrirSlide2">
					<h4>Examples</h4>
					<img class="flecha3" onclick="openGraf3();" src="<?php echo $ruta?>img/public/Flecha.svg">
				</div>
				</div>
				<div class="flex descripcionItem descGraf3">
					<h3>7.8%<br>Hygiene paper</h3>
					<div class="imgCirculo imgCir-3"></div>
					<div class="flex">
						<div class="enlaceCirculo"></div>
						<div class="finCirculo"></div>
					</div>
					<div class="textoDescrip">
						<h4>Cover a wide range of tissue and other hygienic papers for use in households or commercial and industrial premises.</h4>
						<div class="flex lista-descrip">
							<ul>
								<li>Toilet Papers</li>
								<li>Tissues</li>
								<li>Napkins</li>
							</ul>
							<ul>
								<li>Kitchen Paper</li>
								<li>Nappies</li>
								<li>Sanitary Napkins</li>
							</ul>
						</div>
					</div>	
				</div>
			</div>
			<!-- Grafica -->
			<div class="sec-graf4">
				<div class="flex graficas grf1_2">
					<h4>Other Paper and Board</h4>
					<div class="graficaInt" id="grafica4_1"></div>
					<h4 class="ttlPorc">4.4%</h4>
					<h4 class="taLeft">4.7 MT</h4>
				</div>
				<div class="contenido2 cont2Div">
					<div class="flex abrirSlide2">
						<h4>Examples</h4>
						<img class="flecha4" onclick="openGraf4();" src="<?php echo $ruta?>img/public/Flecha.svg">
					</div>
				</div>
				<div class="flex descripcionItem descGraf4">
					<h3>4.4%<br>Other paper<br>and board</h3>
					<div class="imgCirculo imgCir-4"></div>
					<div class="flex">
						<div class="enlaceCirculo"></div>
						<div class="finCirculo"></div>
					</div>
					<div class="textoDescrip">
						<h4>Are used for industrial and special purposes.</h4>
						<div class="flex lista-descrip">
							<ul>
								<li>Cigarette Paper</li>
								<li>Stock of Filter Paper</li>
								<li>Gypsum liners</li>
								<li>Insulation</li>
							</ul>
							<ul>
								<li>Building Materials</li>
								<li>Roofing Materials</li>
								<li>Waxing</li>
								<li>Asphalting</li>
							</ul>
						</div>
					</div>	
				</div>
			</div>
	  </div>   	
	</section>
	<!-- /Seccion 2 -->

	<!-- Seccion 3 -->
	<seccion class="papper">
		<h2 class="title">The Paper Value Chain</h2>
		<div class="gifPaper animate-in" data-anim-type="fade-in-down" data-anim-delay="0"></div>
	</seccion>
	<!-- Seccion 3 -->


	<!-- /Seccion 4 -->
	<section class="flex certified">
		<div class="flex certif-col1">
			<p>Our products are made using renewable and recyclable resources that come from <b>certified natural forests.</b></p>
			<p>CEPI has a long standing commitment towards sustainable forest management and the use of forest resources.</p>
			<p>Consumers can be certain that products are made in sustainable ways that  respect the environment.</p>
			<p><a target="blank" href="https://www.dropbox.com/s/6yn5gfjlqalrm58/AF_Infografia_A_Thriving_Industry.pdf?dl=0"><b>Click here</b></a> to find out more</p>
		</div>
		<div class="certif-col2">
			<img src="img/seccion4/1.png">
		</div>
	</section>
	<!-- /Seccion 4 -->

	<!-- Seccion 5 -->
	<section class="flex cepiFigures">
		<h2>A thriving industry</h2>
		<p><a target="_blank" href="https://www.dropbox.com/s/6yn5gfjlqalrm58/AF_Infografia_A_Thriving_Industry.pdf?dl=0"><b>Click here</b></a> to download a snapshot of the main figures in this report</p>
		<div class="figureCepi">
			<h2 id="count1">0</h2>
			<h2 id="count2">0</h2>
			<h2 id="count3">0</h2>
			<h2 id="count4">0</h2>
			<h2 id="count5">0</h2>
			<h2 id="count6">0</h2>
			<h2 id="count11">0</h2>
			<h2 id="count12">0</h2>
			<h2 id="count13">0</h2>
			<h2 id="count14">0</h2>
			<h2 id="count15">0</h2>
			<h2 id="count16">0</h2>
			<h2 id="count17">0</h2>
			<h2 id="count18">0</h2>
			<h2 id="countPto18">.</h2>
			<h2 id="count18_2">0</h2>
			<h2 id="count19">0</h2>
			<span id="pt1">.</span>
			<h2 id="count19_2">0</h2>
			<h2 id="count7">0</h2>
			<h2 id="count8">0</h2>
			<h2 id="count10">0</h2>
			<h2 id="count20">0</h2>
		</div>
	</section>
	<!-- Seccion 5 -->

	<section class="latesData">
		<h2>Latest Data</h2>
		<p><a href="#" target="_blank">Click here</a> to see to see our All Latest Data / Want more detailed data? Become a subscriber <a href="http://www.cepi.org/node/13432" target="_blank">here</a></p>

		<div id="grafica5" class="grafica"></div>
		<div class="grafica5-table">
			<table class="table-cepi">
				<thead>
					<tr>
					<th></th>
					<th>'90</th>
					<th>'91</th>
					<th>'92</th>
					<th>'93</th>
					<th>'94</th>
					<th>'95</th>
					<th>'96</th>
					<th>'97</th>
					<th>'98</th>
					<th>'99</th>
					<th>'00</th>
					<th>'01</th>
					<th>'02</th>
					<th>'03</th>
					<th>'04</th>
					<th>'05</th>
					<th>'06</th>
					<th>'07</th>
					<th>'08</th>
					<th>'09</th>
					<th>'10</th>
					<th>'11</th>
					<th>'12</th>
					<th>'13</th>
					<th>'14</th>
					<th>'15</th>
				</tr>
				</thead>
				<tbody>
					<tr>
					<th>Production of Market Pulp and Paper </th>
					<td>1.00</td>
					<td>1.03</td>
					<td>1.06</td>
					<td>1.08</td>
					<td>1.17</td>
					<td>1.19</td>
					<td>1.17</td>
					<td>1.27</td>
					<td>1.30</td>
					<td>1.34</td>
					<td>1.41</td>
					<td>1.38</td>
					<td>1.42</td>
					<td>1.50</td>
					<td>1.56</td>
					<td>1.57</td>
					<td>1.63</td>
					<td>1.63</td>
					<td>1.57</td>
					<td>1.40</td>
					<td>1.52</td>
					<td>1.50</td>
					<td>1.48</td>
					<td>1.47</td>
					<td>1.46</td>
					<td>1.46</td>
				</tr>
				<tr>
					<th>Total Primary Energy Consumption</th>
					<td>1.00</td>
					<td>0.98</td>
					<td>0.96</td>
					<td>0.97</td>
					<td>0.94</td>
					<td>0.95</td>
					<td>0.97</td>
					<td>0.93</td>
					<td>0.91</td>
					<td>0.90</td>
					<td>0.87</td>
					<td>0.88</td>
					<td>0.89</td>
					<td>0.88</td>
					<td>0.87</td>
					<td>0.84</td>
					<td>0.86</td>
					<td>0.85</td>
					<td>0.84</td>
					<td>0.87</td>
					<td>0.87</td>
					<td>0.83</td>
					<td>0.82</td>
					<td>0.81</td>
					<td>0.79</td>
					<td>0.80</td>
				</tr>
				<tr>
					<th>Biomass Utilisation</th>
						<td>1.00</td>
						<td>0.98</td>
						<td>0.96</td>
						<td>1.00</td>
						<td>0.98</td>
						<td>0.99</td>
						<td>0.98</td>
						<td>0.98</td>
						<td>0.98</td>
						<td>0.99</td>
						<td>0.97</td>
						<td>0.98</td>
						<td>1.00</td>
						<td>0.99</td>
						<td>0.98</td>
						<td>0.96</td>
						<td>0.98</td>
						<td>0.99</td>
						<td>1.00</td>
						<td>1.05</td>
						<td>1.03</td>
						<td>1.03</td>
						<td>1.05</td>
						<td>1.05</td>
						<td>1.01</td>
						<td>1.04</td>
				</tr>
				<tr>
					<th>Electricity consumption</th>
					<td>1.00</td>
					<td>0.96</td>
					<td>0.95</td>
					<td>0.96</td>
					<td>0.92</td>
					<td>0.93</td>
					<td>0.94</td>
					<td>0.92</td>
					<td>0.92</td>
					<td>0.90</td>
					<td>0.90</td>
					<td>0.90</td>
					<td>0.89</td>
					<td>0.87</td>
					<td>0.85</td>
					<td>0.83</td>
					<td>0.86</td>
					<td>0.84</td>
					<td>0.84</td>
					<td>0.85</td>
					<td>0.86</td>
					<td>0.83</td>
					<td>0.81</td>
					<td>0.80</td>
					<td>0.79</td>
					<td>0.79</td>
				</tr>
				<tr>
					<th>CO2</th>
					<td>1.00</td>
					<td>0.95</td>
					<td>0.94</td>
					<td>0.91</td>
					<td>0.89</td>
					<td>0.88</td>
					<td>0.91</td>
					<td>0.83</td>
					<td>0.81</td>
					<td>0.79</td>
					<td>0.75</td>
					<td>0.75</td>
					<td>0.74</td>
					<td>0.73</td>
					<td>0.68</td>
					<td>0.68</td>
					<td>0.65</td>
					<td>0.63</td>
					<td>0.63</td>
					<td>0.64</td>
					<td>0.62</td>
					<td>0.60</td>
					<td>0.58</td>
					<td>0.57</td>
					<td>0.54</td>
					<td>0.54</td>
				</tr>
				<tr>
					<th>NOX</th>
					<td>1.00</td>
					<td>1.00</td>
					<td>0.96</td>
					<td>0.94</td>
					<td>0.89</td>
					<td>0.85</td>
					<td>0.84</td>
					<td>0.79</td>
					<td>0.74</td>
					<td>0.73</td>
					<td>0.69</td>
					<td>0.70</td>
					<td>0.71</td>
					<td>0.71</td>
					<td>0.69</td>
					<td>0.64</td>
					<td>0.66</td>
					<td>0.63</td>
					<td>0.63</td>
					<td>0.66</td>
					<td>0.65</td>
					<td>0.65</td>
					<td>0.60</td>
					<td>0.61</td>
					<td>0.56</td>
					<td>0.56</td>
				</tr>
				<tr>
					<th>Water intake </th>
					<td>1.00</td>
					<td>0.93</td>
					<td>0.89</td>
					<td>0.83</td>
					<td>0.77</td>
					<td>0.75</td>
					<td>0.73</td>
					<td>0.68</td>
					<td>0.65</td>
					<td>0.64</td>
					<td>0.60</td>
					<td>0.62</td>
					<td>0.61</td>
					<td>0.61</td>
					<td>0.63</td>
					<td>0.55</td>
					<td>0.55</td>
					<td>0.56</td>
					<td>0.55</td>
					<td>0.58</td>
					<td>0.54</td>
					<td>0.55</td>
					<td>0.56</td>
					<td>0.54</td>
					<td>0.54</td>
					<td>0.54</td>
				</tr>
				<tr>
					<th>COD</th>
					<td>1.00</td>
					<td>0.88</td>
					<td>0.73</td>
					<td>0.63</td>
					<td>0.55</td>
					<td>0.53</td>
					<td>0.48</td>
					<td>0.44</td>
					<td>0.40</td>
					<td>0.35</td>
					<td>0.34</td>
					<td>0.33</td>
					<td>0.31</td>
					<td>0.30</td>
					<td>0.28</td>
					<td>0.25</td>
					<td>0.25</td>
					<td>0.24</td>
					<td>0.23</td>
					<td>0.24</td>
					<td>0.24</td>
					<td>0.23</td>
					<td>0.23</td>
					<td>0.22</td>
					<td>0.21</td>
					<td>0.21</td>
				</tr>
				<tr>
					<th>SO2 </th>
					<td>1.00</td>
					<td>0.82</td>
					<td>0.74</td>
					<td>0.63</td>
					<td>0.55</td>
					<td>0.49</td>
					<td>0.46</td>
					<td>0.40</td>
					<td>0.34</td>
					<td>0.29</td>
					<td>0.25</td>
					<td>0.25</td>
					<td>0.24</td>
					<td>0.21</td>
					<td>0.19</td>
					<td>0.20</td>
					<td>0.21</td>
					<td>0.19</td>
					<td>0.17</td>
					<td>0.17</td>
					<td>0.15</td>
					<td>0.13</td>
					<td>0.11</td>
					<td>0.12</td>
					<td>0.09</td>
					<td>0.10</td>
				</tr>
				<tr>
					<th>BOD</th>
					<td>1.00</td>
					<td>0.88</td>
					<td>0.74</td>
					<td>0.66</td>
					<td>0.55</td>
					<td>0.54</td>
					<td>0.46</td>
					<td>0.44</td>
					<td>0.40</td>
					<td>0.36</td>
					<td>0.32</td>
					<td>0.31</td>
					<td>0.30</td>
					<td>0.27</td>
					<td>0.24</td>
					<td>0.20</td>
					<td>0.19</td>
					<td>0.18</td>
					<td>0.17</td>
					<td>0.17</td>
					<td>0.17</td>
					<td>0.17</td>
					<td>0.16</td>
					<td>0.16</td>
					<td>0.15</td>
					<td>0.14</td>
				</tr>
				<tr>
					<th>AOX </th>
					<td>1.00</td>
					<td>0.75</td>
					<td>0.47</td>
					<td>0.29</td>
					<td>0.20</td>
					<td>0.16</td>
					<td>0.12</td>
					<td>0.11</td>
					<td>0.10</td>
					<td>0.09</td>
					<td>0.08</td>
					<td>0.08</td>
					<td>0.08</td>
					<td>0.08</td>
					<td>0.06</td>
					<td>0.05</td>
					<td>0.06</td>
					<td>0.05</td>
					<td>0.05</td>
					<td>0.05</td>
					<td>0.05</td>
					<td>0.05</td>
					<td>0.05</td>
					<td>0.04</td>
					<td>0.04</td>
					<td>0.04</td>
				</tr>
				</tbody>
			</table>
		</div>
		<div id="grafica6" class="grafica"></div>
		<div class="grafica">
			<h2>CEPI Trade Flows of Paper and Board in 2015</h2>
			<div id="grafica7" class="grafica-mapa"></div>
			<table class="footer-map">
				<tr>
					<th>Total Imports CEPI: 5.5 Millon Tones</th>
					<th></th>
					<th>Imports to CEPI</th>
				</tr>
				<tr>
					<th>Total Exports from CEPI: 18.9 Millon Tones</th>
					<th></th>
					<th>Exports from CEPI</th>
				</tr>
			</table>
		</div>
	</section>

	<footer class="flex">
		<div class="footer-col1">
			<h2>Contact Persons</h2>
			<div class="flex int-ftr">
				<div class="ft-int-col1">
					<p>Industrial Policy Director<br>Bernard Lampard</p>
					<p>Industrial Policy Director<br>Bernard Lampard</p>
				</div>
				<div class="ft-int-col2">
					<p>Statistics Manager<br>Ariane Crèvecouer</p>
					<p>Statistics Manager<br>Ariane Crèvecouer</p>
				</div>
			</div>
		</div>
		<div class="flex footer-col2">
			<h2>Data Quality</h2>
			<p>Ernst & Young issued a limited <a target="_blank" href="http://digibook.digi-work.com/Digibooks.aspx/Get/cepi/1521/2015_Assurance_Statement_for_Webpdf">assurance statement</a> on the data quality rating that CEPI carried out on its core indicators.<br><br>To download the statement and other statistics of our performance please go to <a target="_blank" href="http://www.cepi.org/topics/statistics">www.cepi.org/topics/statistics.</a> You can also request your own paper copy of the statement by sending an email to <a id="ftrEnlace" href="mailto:mail@cepi.org">mail@cepi.org.</a></p>
		</div>

		<a class="ancla" href="#bannerSec">
			<img class="footerFlecha" src="<?php echo $ruta?>img/public/Boton_Flecha-73.svg">
		</a>
	</footer>

<!-- /Contenido -->

	<!-- FAB Button -->
		<?php include('../../components/fab-button.php') ?>
	<!-- FAB Button -->

	<?php include('../../components/scripts.php'); ?>

<!-- <script src="../../shared/js/app.js"></script> -->


<script type="text/javascript">

function openGraf1 () {
	$(".sec-graf1").toggleClass('openGraf1');
	$(".flecha1").toggleClass('rotarFlecha');
}
function openGraf2 () {
	$(".sec-graf2").toggleClass('openGraf2');
	$(".flecha2").toggleClass('rotarFlecha');
}
function openGraf3 () {
	$(".sec-graf3").toggleClass('openGraf3');
	$(".flecha3").toggleClass('rotarFlecha');
}
function openGraf4 () {
	$(".sec-graf4").toggleClass('openGraf4');
	$(".flecha4").toggleClass('rotarFlecha');
}
function slidOpen() {
	$("#main-slider-space").toggleClass('grande');
	$("#main-slider-next").toggleClass('slOrient');
}
$( function() {
    $( "#grafica1_1" ).progressbar({ value: 49 });
    $( "#grafica1_2" ).progressbar({ value: 29.9 });
    $( "#grafica1_3" ).progressbar({ value: 14.4 });
    $( "#grafica1_4" ).progressbar({ value: 4.7 });
    $( "#grafica2_1" ).progressbar({ value: 38.8 });
    $( "#grafica2_2" ).progressbar({ value: 15.2 });
    $( "#grafica2_3" ).progressbar({ value: 15.8 });
    $( "#grafica2_4" ).progressbar({ value: 7.8 });
    $( "#grafica3_1" ).progressbar({ value: 7.8 });
    $( "#grafica4_1" ).progressbar({ value: 4.4 });
  } );

function conteo() {
	var options = {
	  useEasing : true, 
	  useGrouping : true, 
	  separator : '.', 
	  decimal : ',', 
	  prefix : '', 
	  suffix : '' 
	};
	var count1 = new CountUp("count1", 0, 23, 0, 2, options);
	var count2 = new CountUp("count2", 0, 920, 0, 2, options);
	var count3 = new CountUp("count3", 0, 505, 0, 2, options);
	var count4 = new CountUp("count4", 0, 181000, 2, options);
	var count5 = new CountUp("count5", 0, 63, 0, 2, options);
	var count6 = new CountUp("count6", 0, 75, 0, 2, options);
	var count7 = new CountUp("count7", 0, 95, 0, 2, options);
	var count8 = new CountUp("count8", 0, 16, 0, 2, options);

	var count10 = new CountUp("count10", 0, 83, 0, 2, options);
	var count11 = new CountUp("count11", 0, 21, 0, 2, options);
	var count12 = new CountUp("count12", 0, 47, 0, 2, options);
	var count13 = new CountUp("count13", 0, 92, 0, 2, options);
	var count14 = new CountUp("count14", 0, 58, 0, 2, options);
	var count15 = new CountUp("count15", 0, 72, 0, 2, options);
	var count16 = new CountUp("count16", 0, 60, 0, 2, options);
	var count17 = new CountUp("count17", 0, 2, 0, 2, options);
	var count18 = new CountUp("count18", 0, 2, 0, 2, options);
	var count18_2 = new CountUp("count18_2", 0, 38, 0, 2, options);
	var count19 = new CountUp("count19", 0, 3, 0, 2, options);
	var count19_2 = new CountUp("count19_2", 0, 5, 0, 2, options);
	var count20 = new CountUp("count20", 0, 18, 0, 2, options);
	count1.start();count2.start();count3.start();
	count4.start();count5.start();count6.start();
	count7.start();count8.start();count20.start();
	count10.start();count11.start();count12.start();
	count13.start();count14.start();count15.start();
	count16.start();count17.start();count18.start();
	count19.start();count19_2.start();count18_2.start();
}

function testScroll(){
    if((window.pageYOffset>3100) && (window.pageYOffset<3400)){
    	conteo();
    }
}
window.onscroll=testScroll;
testScroll();

</script>
</body>
</html>