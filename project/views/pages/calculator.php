
<div class="response">
    <?php

    use Project\templates\Form;

    Form::startForm("", "");
    echo '<input id="autocomplete" type="text" name="inpform" placeholder="Введите название препарата"
               autocomplete="off"/><div id="searchField"></div>';
    Form::setInput("text","inpmass","Input mass","Input mass");
    Form::setInput("submit", "button");
    Form::endForm();
    ?>
</div>
