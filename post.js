window.alert("postjs");

jQuery(document).ready(function () {
  //
  // media modalの処理
  //

  // カスタムしたmedia modalの作成
  function createCustomMedia()
  {
    var media = wp.media({
      title: 'ファイルアップロード',
      library: {type: ''},
      frame: 'select',
      button: {text: '選択'},
      multiple: false
    });

    media.caller = null;
    media.dest = null;

    media.attachURL = function() {
      var attachment = media.state().get('selection').first().toJSON();
      jQuery(media.caller).attr("src", attachment.url);
      jQuery(media.dest).val(attachment.url);
    }

    media.on('select', media.attachURL);

    return media;
  }

  var customMedia = createCustomMedia();

  // photo-1
  jQuery('#select-photo-1').click(function (event) {
    event.preventDefault();

    customMedia.caller = '#thumb-photo-1';
    customMedia.dest = '#photo-1';
    customMedia.open();
  });
  jQuery('#delete-1').click(function() {
    jQuery('#thumb-photo-1').attr("src", "");
    jQuery('#photo-1').val("");
  });

  // photo-2
  jQuery('#select-photo-2').click(function (event) {
    event.preventDefault();

    customMedia.caller = '#thumb-photo-2';
    customMedia.dest = '#photo-2';
    customMedia.open();
  });
  jQuery('#delete-2').click(function() {
    jQuery('#thumb-photo-2').attr("src", "");
    jQuery('#photo-2').val("");
  });

  // photo-3
  jQuery('#select-photo-3').click(function (event) {
    event.preventDefault();

    customMedia.caller = '#thumb-photo-3';
    customMedia.dest = '#photo-3';
    customMedia.open();
  });
  jQuery('#delete-3').click(function() {
    jQuery('#thumb-photo-3').attr("src", "");
    jQuery('#photo-3').val("");
  });

});
