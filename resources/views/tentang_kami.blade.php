@extends('layouts.app')
@section('content')

<style type="text/css">
	* {
    margin: 0;
    padding: 0;
}
.sel {
    color:white;
    width: 250px;
    min-height: 40px;
    box-sizing: border-box;
    background-color: #55E6FA;
    overflow: hidden;
}
.txt {
    padding: 10px;
}
.selected {
    background-color: #31A9B9;
}
.hide {
    display: none;
}
.sel .options {
    width: 250px;
    background-color: #66f7FB;
}
.sel .options div {
    transition: all 0.2s ease-out;
    padding: 10px;
}
.sel .options div:hover {
    background-color: #31A9B9;
}
</style>
<div class="sel">
    <div class='txt'>Select Option</div>
    <div class="options hide">
        <div>Option 1</div>
        <div>Option 2</div>
        <div>Option 3</div>
        <div>Lot of text to diplay so it can expand multiple lines and expand the select main text also</div>
    </div>
</div>
@endsection
@section('script')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
        var sel = $('.sel'),
            txt = $('.txt'),
            options = $('.options');

        sel.click(function (e) {
            e.stopPropagation();
            options.show();
        });

        $('body').click(function (e) {
            options.hide();
        });

        options.children('div').click(function (e) {
            e.stopPropagation();
            txt.text($(this).text());
            $(this).addClass('selected').siblings('div').removeClass('selected');
            options.hide();
        });
	</script>

@endsection