<?php
/*
	$url = "";
	$path = "";
	if (isset($_GET['current_site'])) {
		$url = $_GET['current_site'];
	}
	if (isset($_GET['current_site'])) {
		$path = $GET['current_path'];
	}
	$absolute = $url . $path;
*/
	$tiles = [
		array(
			"title" => "टीके",
			"text" => "टीके के बारे में अक्सर पूछे जाने वाले प्रश्न और संसाधन",
			"link_text" => "टीकों पर जाएं ",
			"endpoint" => "vaccines"
		),
		array(
			"title" => "अक्सर पूछे जाने वाले प्रश्न",
			"text" => "कोविड- 19 के बारे में अक्सर पूछे जाने वाले प्रश्न",
			"link_text" => "प्रश्न पर जाएं",
			"endpoint" => "faqs-about-covid-19"
		),
		array(
			"title" => "भ्रांति को तोड़ना",
			"text" => "कोरोना वायरस (कोविड-19) के बारे में भ्रांतियां और इनकी वास्तविकता",
			"link_text" => "भ्रांति को तोड़ना पर जाएं",
			"endpoint" => "myths-vs-facts"
		),
		array(
			"title" => "सोशल मीडिया टिप्स",
			"text" => "कोविड-19 के समय में सोशल मीडिया का जिम्मेदारीपूर्ण उपयोग",
			"link_text" => "'सोशल मीडिया टिप्स’ पर जाएं",
			"endpoint" => "social-media-tips"
		),
		array(
			"title" => "सूचना स्रोत",
			"text" => "कोविड-19 की जानकारी के लिए विश्वसनीय स्रोत",
			"link_text" => "'सूचना स्रोत’ पर जाएं",
			"endpoint" => "resources-covid19"
		),
		array(
			"title" => "आंकड़ों पर नजर",
			"text" => "दुनिया भर में कोविड-19 मामलों पर नवीनतम संख्या",
			"link_text" => "'आंकड़ों पर नजर' पर जाएं",
			"endpoint" => "data-spotlight"
		),
				array(
			"title" => "स्वास्थ्य और कुशलता",
			"text" => "तनाव से निपटने और मानसिक, शारीरिक व सामाजिक स्वास्थ्य बनाए रखने के तरीके",
			"link_text" => "'स्वास्थ्य और कुशलता’ पर जाएँ",
			"endpoint" => "health-and-well-being-during-covid-19"
		),
				array(
			"title" => "धुम्रपान और तंबाकू",
			"text" => "धुम्रपान करने और तंबाकू इस्तेमाल करने वालों के लिए सुझाव",
			"link_text" => "'धुम्रपान और तंबाकू’ पर जाएँ",
			"endpoint" => "tobacco-tips"
		)
		
	];
?>
<style>
  .dashboard-container {
    background: #FCF6EC;
  }
  .dashboard-container .container {
    max-width: 1140px !important;
  }
  .dashboard-header {
    background: #F5A628;
    color: #fff;
    text-align: center;
  }
  .intro-paragraph {
    color: #A85B00;
    font-size: 1.2rem;
    line-height: 1.57em;
  }
  .card-resource {
    border-color: #BAEAFC;
    border-width: 2px;
  }
  .header-resource {
    background: #BAEAFC;
    color: #11476A;
    font-size: 1.2rem;
  }
  .btn-resource {
    background: #FFBE57;
    color: #fff;
  }
</style>
<div class="dashboard-container mt-5 mb-3 pb-5">
  <h1 class="dashboard-header py-2">कोविड- 19 डैशबोर्ड</h1>
  <div class="container">
    <div class="intro-paragraph p-3 my-3">
      <p>इस साइट पर आपका स्वागत है। दुनिया भर में कोविड-19 वायरस का तेजी से प्रसार करोड़ों लोगों को प्रभावित कर रहा है। नतीजा यह है कि सही सूचना के साथ ही भ्रामक सूचना और फर्जी खबरें भी लोगों तक जम कर पहुंच रही हैं। यहां हमारा जोर अतिरिक्त जानकारी पर नहीं, बल्कि इस बात पर है कि कोविड-19 संबंधी विश्वसनीय और आसानी से समझ में आने वाली सूचना इस तरह एक साथ लाई जाए जिसका आसानी से उपयोग किया जा सके। यहां हम कोशिश कर रहे हैं कि प्रचूर रूप में उपलब्ध सूचना को उपयोग के लायक कैसे बनाया जाए। इसलिए जैसे-जैसे नए-नए साक्ष्य उपलब्ध होते जाएंगे, हम अपने पेज अपडेट करते रहेंगे। पत्रकार, गैर सरकारी संगठन और कुछ अन्य ऐसे समूहों के साथ हम पहले से काम कर रहे हैं और यह प्रयास मुख्य रूप से उन्हीं के लिए है। दूसरों को भी यह उपयोगी लगे तो और अच्छी बात है...</p>
      <p>आने वाले हफ्तों में हम इसको और विस्तार देंगे, बेहतर करेंगे और सूचना  को लगातार अपडेट करते रहेंगे। इसलिए यहां बार-बार आएं और इसे बेहतर बनाने के लिए हमें अपनी राय से अवगत भी करवाएं।</p> 
    </div>
    <div class="row">
<!-- Tiles loop -->
    <?php foreach($tiles as $tile) : ?>
      <div class="col-12 col-sm-12 col-md-6 col-lg-4">
        <div class="card card-resource rounded-0 mb-4">
          <div class="card-header header-resource">
            <?php echo $tile['title']; ?>
          </div>
          <div class="card-body body-resource">
            <div class="card-text">
              <p><?php echo $tile['text']; ?></p>
            </div>
            <a href="<?php echo $tile['endpoint']; ?>" class="btn btn-lg btn-resource btn-block mt-4 rounded-0"><?php echo $tile['link_text']; ?></a>
          </div>
        </div>
      </div>
  <?php endforeach; ?>
<!-- End loop -->
    </div>
  </div>
</div>
