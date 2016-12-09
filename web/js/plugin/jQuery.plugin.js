(function ($) {
    $.fn.my_wysiwyg = function (wysiwygOptions) {
        var wysiwygOptions = $.extend({
            buttons: ['bold',
                'ruble',
                'link',
                'color',
                'zoom',
                'italic',
                'gbp',
                'align-left',
                'align-right',
                'align-justify',
                'align-center',
                'picture',
                'facetime-video'],
            theme: 'wysiwyg'
        });


        /*******************************\
         ****************MENU*************
         \*******************************/

        $(this).attr('class', 'wysiwyg-textarea');
        $('.wysiwyg-textarea').wrap('<div class="wysiwyg-wrapper"></div>');
        $(this).before('<div class="wysiwyg-menu"></div><div class="wysiwyg-visuel" contenteditable></div>');
        for (var i = 0; i < wysiwygOptions.buttons.length; i++) {
            if (wysiwygOptions.buttons[i] != 'color' && wysiwygOptions.buttons[i] != 'zoom') {
                $('.wysiwyg-menu').append('<button type="button" class="btn btn-default wysiwyg-' + wysiwygOptions.buttons[i] + '"><span class="glyphicon glyphicon-' + wysiwygOptions.buttons[i] + '" aria-hidden="true"></span></button>');
            }
        }
        ;
        $('.wysiwyg-menu').append('<select class="wysiwyg-color"><option value="">color</option></select>');
        $('.wysiwyg-menu').append('<select class="wysiwyg-zoom"><option value="">zoom</option>');
        $('.wysiwyg-menu').append('<button type="button" class="change wysiwyg-bouton_1 btn btn-default">Code</button><button type="button" class="change activeSwitch wysiwyg-bouton_2 btn btn-default">Visuel</button>');
        var colorSelect = ['red', 'green', 'yellow', 'purple', 'blue', 'cyan'];
        for (var i = 0; i < colorSelect.length; i++) {
            $('.wysiwyg-color').append('<option value="' + colorSelect[i] + '">' + colorSelect[i] + '</option>');
        }
        ;
        var zoomSelect = ['25', '50', '75', '100', '150', '200'];
        for (var i = 0; i < zoomSelect.length; i++) {
            $('.wysiwyg-zoom').append('<option value="' + zoomSelect[i] + '">' + zoomSelect[i] + ' px</option>');
        }
        ;

        /*******************************\
         **************SWITCH*************
         \*******************************/
        var myTextArea = $(this);
        myTextArea.addClass('hideSwitch');
        var myVisuel = $('.wysiwyg-visuel');

        $('.wysiwyg-bouton_2').click(function () {
            $(this).addClass('activeSwitch');
            $('.wysiwyg-bouton_1').removeClass('activeSwitch');
            myTextArea.removeClass('showSwitch');
            myTextArea.addClass('hideSwitch');
            myVisuel.removeClass('hideSwitch');
            myVisuel.addClass('showSwitch');
        });
        $('.wysiwyg-bouton_1').click(function () {
            $(this).addClass('activeSwitch');
            $('.wysiwyg-bouton_2').removeClass('activeSwitch');
            myTextArea.removeClass('hideSwitch');
            myTextArea.addClass('showSwitch');
            myVisuel.removeClass('showSwitch');
            myVisuel.addClass('hideSwitch');
        });

        /*
         * desactive sa pour voir le code
         */
         //$('.wysiwyg-bouton_1').hide();
         //$('.wysiwyg-bouton_2').hide();

        /*******************************\
         ***********BOUTTONS**************
         \*******************************/

        $(this).on("input", function () {
            $('.wysiwyg-visuel').html(myTextArea.val());
        });

        $(this).val($('.wysiwyg-visuel').html())

        $('.wysiwyg-visuel').bind("DOMSubtreeModified", function () {
            myTextArea.val($(this).html());
        })

        $('.wysiwyg-bold').click(function () {
            document.execCommand("bold", false, "");
        });

        $('.wysiwyg-italic').click(function () {
            document.execCommand("italic", false, "");
        });

        $('.wysiwyg-text-width').click(function () {
            document.execCommand("underline", true, "");
        });

        $(".wysiwyg-zoom").change(function () {
            var size = $(this).val();
            document.execCommand("fontsize", false, size + 'px');
        });

        $(".wysiwyg-color").change(function () {
            var color = $(this).val();
            document.execCommand("foreColor", false, color);
        });

        $('.wysiwyg-text-width').click(function () {
            document.execCommand("underline", false, "");
        });

        $('.wysiwyg-align-left').click(function () {
            document.execCommand("justifyLeft", true, "");
        });

        $('.wysiwyg-align-right').click(function () {
            document.execCommand("justifyRight", true, "");
        });

        $('.wysiwyg-align-center').click(function () {
            document.execCommand("justifyCenter", true, "");
        });

        $('.wysiwyg-align-justify').click(function () {
            document.execCommand("justifyFull", false, "");
        });

        $('.wysiwyg-ruble').click(function () {
            document.execCommand("strikeThrough", false, "");
        });

        $(".wysiwyg-indent-right").click(function () {
            document.execCommand("indent", false, "");
        });

        $(".wysiwyg-indent-left").click(function () {
            document.execCommand("outdent", false, "");
        });

        $('.wysiwyg-link').click(function () {
            var lien = prompt("quelle est votre lien ?", "http://www.");
            while (lien == "") {
                lien = prompt("quelle est votre lien ?", "http://www.");
            }
            if (lien) {
                document.execCommand("CreateLink", false, lien);
            }
        });

        /*******************************\
         ***************IMAGE*************
         \*******************************/

        $(".wysiwyg-picture").click(function () {

            var wysiwyg_pictureSRC = prompt('Chemin de l\'image:');
            while (wysiwyg_pictureSRC == '') {
                wysiwyg_pictureSRC = prompt('Chemin de l\'image:');
            }
            if (wysiwyg_pictureSRC) {
                var pictureEmbed = '<img src="' + wysiwyg_pictureSRC + '" alt="picture" class="img-embed"/>';

                var position = window.getSelection().getRangeAt(0).startOffset;

                function escapeHtml(text) {
                    return text.replace(/&amp;/g, "").replace(/&nbsp;/g, "")
                }

                $(".wysiwyg-visuel").html(escapeHtml($(".wysiwyg-visuel").html()));

                String.prototype.replaceAt = function (index, character) {
                    return this.substr(0, index) + character + this.substr(index + character.length);
                };

                var TextArea = $(".wysiwyg-visuel").html().replaceAt(position, "");

                var textBeforeSelection = TextArea.substring(0, position);
                var textAfterSelection = TextArea.substring(position, TextArea.length);

                $('.wysiwyg-visuel').html(textBeforeSelection + pictureEmbed + textAfterSelection);
            }
        });

        /*******************************\
         ***************VIDEO*************
         \*******************************/

        $('.wysiwyg-facetime-video').click(function () {
            var videolink = prompt('Lien de la vidéo:');
            while (videolink == '') {
                videolink = prompt('Lien de la vidéo:');
            }
            if (videolink) {
                var videoIframe = '<iframe width="560" height="315" src="' + videolink + '" frameborder="0" allowfullscreen></iframe>';
                var position = window.getSelection().getRangeAt(0).startOffset;

                function escapeHtml(text) {
                    return text.replace(/&amp;/g, "").replace(/&nbsp;/g, "")
                }

                $(".wysiwyg-visuel").html(escapeHtml($(".wysiwyg-visuel").html()));

                String.prototype.replaceAt = function (index, character) {
                    return this.substr(0, index) + character + this.substr(index + character.length);
                };

                var TextArea = $(".wysiwyg-visuel").html().replaceAt(position, "");

                var textBeforeSelection = TextArea.substring(0, position);
                var textAfterSelection = TextArea.substring(position, TextArea.length);

                $('.wysiwyg-visuel').html(textBeforeSelection + videoIframe + textAfterSelection);
            }
        });


        /*******************PRE***************/

        $(".wysiwyg-gbp").click(function ()
        {
            var selected_text = getSelectedText();

            if(selected_text.length > 0)
            {
                var re = new RegExp(selected_text,"g");

                $(".wysiwyg-visuel").html($(".wysiwyg-visuel").html().replace(re ,"<pre>" + selected_text + "</pre><br/>"));
            }
        });

        function getSelectedText()
        {
            if (window.getSelection) {
                return window.getSelection().toString();
            } else if (document.selection) {
                return document.selection.createRange().text;
            }
            return '';
        }

        /*******************************\
         ***************END***************
         \*******************************/

        $('.wysiwyg-visuel').html(myTextArea.val());

        return this;
    };
})(jQuery);
