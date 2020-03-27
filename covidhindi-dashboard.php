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
			"title" => "अक्सर पूछे जाने वाले प्रश्न",
			"text" => "कोविड- 19 के बारे में अक्सर पूछे जाने वाले प्रश्न",
			"link_text" => "प्रश्न पर जाएं",
			"endpoint" => "faqs-about-covid-19"
		),
		array(
			"title" => "भ्रांति और वास्तविकता",
			"text" => "कोरोना वायरस (कोविड-19) के बारे में भ्रांतियां और इनकी वास्तविकता",
			"link_text" => "‘भ्रांति और वास्तविकता’ पर जाएं",
			"endpoint" => "myths-vs-facts"
		),
		array(
			"title" => "सोशल मीडिया टिप्स",
			"text" => "कोविड-19 के समय में सोशल मीडिया का जिम्मेदारीपूर्ण उपयोग",
			"link_text" => "‘सोशल मीडिया टिप्स’ पर जाएं",
			"endpoint" => "social-media-tips"
		),
		array(
			"title" => "सूचना स्रोत",
			"text" => "कोविड-19 की जानकारी के लिए विश्वसनीय स्रोत",
			"link_text" => "‘सूचना स्रोत’ पर जाएं",
			"endpoint" => "resources-covid19"
		),
		array(
			"title" => "आंकड़ों पर नजर",
			"text" => "दुनिया भर में कोविड-19 मामलों पर नवीनतम संख्या",
			"link_text" => "'आंकड़ों पर नजर' पर जाएं",
			"endpoint" => "data-spotlight"
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
      <p>साइट पर आपका स्वागत है। दुनिया भर में कोविड-19 वायरस का तेजी से प्रसार लाखों लोगों को प्रभावित कर रहा है और इसके परिणामस्वरूप सूचना, गलत सूचना और विघटन का प्रसार हो रहा है। हमारा इरादा अतिरिक्त जानकारी बनाना नहीं है, बल्कि विश्वसनीय कोविड-19 संबंधित सूचनाओं को साथ लाना है। यहां, इस सारी जानकारी को संगठित करके रखा जाएगा, और हमारी कोशिश रहेगी कि जैसे-जैसे अधिक सबूत/ जानकारी उपलब्ध होंगे हम इस पृष्ठ को अपडेट करते रहेंगे। हमारे लक्षित दर्शक वे लोग हैं जिनके साथ हम काम कर रहे हैं: पत्रकार, गैर-सरकारी संगठन और जिन समुदायों में हम संलग्न हैं, उनके सदस्य। अन्य लोग भी इसे उपयोगी पा सकते हैं।</p>
      <p>अगले कुछ हफ्तों में हम इस जानकारी का विस्तार करेंगे और इसे अपडेट करेंगे। कृपया इस साइट पे बार-बार आइए और हमें बताएं कि यह साइट अधिक उपयोगी कैसे हो सकती है।</p> 
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
