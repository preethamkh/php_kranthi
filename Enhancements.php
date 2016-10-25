<?php
require_once("Header.php");
?>
<div id="spacer">
    <p>Introduction to IPV4 and IPV6 Technologies</p>
</div>

<section id="text_columns">
    <h3 class="hidden">na</h3>
    <article class="column1">
        <header>
            <h2>AUDIO ELEMENT</h2>
        </header>
        <article>
            <h4>.</h4>
            <p>
                Before HTML5, there was no standard for playing audio files on a web page.
            </p>
            <p>
                Before HTML5, audio files had to be played with a plug-in (like flash). However, different browsers
                supported different plug-ins.
                HTML5 defines a new element which specifies a standard way to embed an audio file on a web page: the
                &lt;audio&gt; element.
                The controls attribute adds audio controls, like play, pause, and volume.
            </p>
            <p id="audio">
                <audio controls="controls">
                    <source src="http://upload.wikimedia.org/wikipedia/en/0/04/Rayman_2_music_sample.ogg"/>
                    Your browser doesn’t have support for HTML5 'audio' element
                </audio>
            </p>
        </article>
        <br/>
        <br/>

        <header>
            <h2>VIDEO ELEMENT</h2>
        </header>
        <article>
            <h3 class="hidden">na</h3>
            <p>
                Before HTML5, there was no standard for showing videos on a web page. Videos could only be played with
                plug-ins (like flashplayers).
                The HTML5 &lt;video&gt; element specifies a standard way to embed a video in a web page.
            </p>
            <p>
                The controls attribute adds video controls, like play, pause, and volume.
                It is a good idea to always include width and height attributes.
                If height and width are not set, the browser does not know the size of the video. The effect will be
                that the page will change (or flicker) while the video loads.
            </p>
            <p>
                <video id="videop" controls="controls">
                    <source type="video/ogg"
                            src="http://playground.html5rocks.com/samples/html5_misc/chrome_japan.ogv"/>
                    This browser version you're using doesn’t support HTML5 video
                </video>
            </p>
        </article>
        <br/>
        <br/>

        <header>
            <h2>Required field</h2>
        </header>
        <article>
            <h3 class="hidden">na</h3>
            <p> This attribute when applied to a text field means that the field needs to be entered by the user before
                submitting. We shall be looking at this in more detail in a future recipe, but it is interesting to note
                that currently the browsers which support this feature will give an indication that the field is
                required whenever if you try to submit the form without entering a value in it, the best example of that
                is the Opera browser and I strongly suggest that you see it in action in the Opera browser. Example
                usage is shown below:</p>

            <form id="registrationform">
                <label for="username">Username</label>
                <input name="username" id="username" type="text" required="required" autofocus="autofocus"/><br/>
                <button type="submit">Register</button>
            </form>
        </article>
        <br/>

        <header>
            <h2>Autofocus</h2>
        </header>
        <article>
            <h3 class="hidden">na</h3>
            <p>
                This attribute when applied to a particular input type in the form, will result in that field being auto
                focused so that the user can start entering the value without needing to first set the focus to that
                field. Example usage is shown below:
            </p>
            <div class="center">
                <input name="username" type="text" autofocus="autofocus"/>
            </div>
        </article>
        <br/>
        <br/>


        <header>
            <h2>Placeholder</h2>
        </header>
        <article>
            <h3 class="hidden">na</h3>
            <p> This attribute when applied to a text field, provides a text value that is displayed in the text field
                to help the user understand what kind of data needs to be filled in there. It is only a hint to the
                user. When you focus on that text field, the place holder text will be cleared and the user can enter
                the value as needed. If you tab out of that text field and if there is no value entered by the user,
                then the placeholder text is again displayed over there. If you have entered a value, the placeholder
                text is not displayed. The placeholder attributed is strongly recommended and is becoming the norm on
                most forms now. It is nice to have that now in HTML itself instead of writing Javascript to manage all
                of it. Example usage is shown below:</p>

            <div class="center">
                <input class="center" name="username" type="text" placeholder="Enter Username here"/>
            </div>
        </article>
        <br/>
        <br/>
    </article>
    <p>
        <a href="http://rominirani.com/html5-recipes-forms-enhancements/">Reference1</a><br/>
        <a href="http://www.w3schools.com/html/html5_audio.asp">Reference2</a>
    </p>
    <section class="column2">
        <h3 class="hidden">na</h3>
    </section>
</section>
<?php
require_once("Footer.php");
?>