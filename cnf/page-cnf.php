<?php
/*
	Template Name: Página CNF
*/

/* 
	autor: josé aelysson;
*/
	
  ?>

  <?php get_header() ?>

  <div id="content-page">

    <?php the_post() ?>

    <div class="conteudo" style="margin-bottom: 40px;">

     <div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
      <h1 class="entry-title"><?php the_title() ?></h1>
      

      <html class="supernova">

      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <meta property="og:title" content="Formulário" >

        <link href="css/styles/form.css" rel="stylesheet" type="text/css" />
        
        <link type="text/css" rel="stylesheet" href="css/styles/nova.css" />
        
        <link type="text/css" media="print" rel="stylesheet" href="css/estilo.css" />
        
        
        <style type="text/css">
        .form-label-left{
          width:150px !important;
        }
        .form-line{
          padding-top:12px;
          padding-bottom:12px;
        }
        .form-label-right{
          width:150px !important;
        }
        body, html{
          margin:0;
          padding:0;
          background:rgb(255, 255, 255);
        }

        .form-all{
          margin:0px auto;
          padding-top:20px;
          width:660px;
          color:rgb(36, 75, 101) !important;
          font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
          font-size:14px;
        }
        .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
          color: #555;
        }

      </style>

      <style type="text/css" id="form-designer-style">
      /* Injected CSS Code */
      .form-all {
        font-family: "Lucida Grande", sans-serif;
      }
      .form-all {
        width: 660px;
        width: 100%;
        max-width: 660px;
      }
      .form-label-left,
      .form-label-right {
        width: 150px;
      }
      .form-label {
        white-space: normal;
      }
      .form-label.form-label-auto {
        display: inline-block;
        float: left;
        text-align: left;
        width: 150px;
      }
      .form-label-left {
        display: inline-block;
        white-space: normal;
        float: left;
        text-align: left;
      }
      .form-label-right {
        display: inline-block;
        white-space: normal;
        float: left;
        text-align: right;
      }
      .form-label-top {
        white-space: normal;
        display: block;
        float: none;
        text-align: left;
      }
      .form-all {
        font-size: 14px;
      }
      .form-label {
        font-weight: bold;
      }
      .form-checkbox-item label,
      .form-radio-item label {
        font-weight: normal;
      }
      .supernova {
        background-color: #D2E5F0;
      }
      .supernova body {
        background-color: #D2E5F0;
      }
/*
@width30: (unit(@formWidth, px) + 60px);
@width60: (unit(@formWidth, px)+ 120px);
@width90: (unit(@formWidth, px)+ 180px);
*/
/* | */
@media screen and (min-width: 480px) {
  .supernova .form-all {
    border: 1px solid #e6e6e6;
    -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
    box-shadow: 0 3px 9px rgba(0, 0, 0, 0.1);
  }
}
/* | */
/* | */
@media screen and (max-width: 480px) {
  .jotform-form {
    padding: 10px 0;
  }
}
/* | */
/* | */
@media screen and (min-width: 480px) and (max-width: 768px) {
  .jotform-form {
    padding: 30px 0;
  }
}
/* | */
/* | */
@media screen and (min-width: 480px) and (max-width: 659px) {
  .jotform-form {
    padding: 30px 0;
  }
}
/* | */
/* | */
@media screen and (min-width: 768px) {
  .jotform-form {
    padding: 60px 0;
  }
}
/* | */
/* | */
@media screen and (max-width: 659px) {
  .jotform-form {
    padding: 0;
  }
}
/* | */
.supernova .form-all,
.form-all {
  background-color: #ffffff;
  border: 1px solid transparent;
}
.form-header-group {
  border-color: #e6e6e6;
}
.form-matrix-table tr {
  border-color: #e6e6e6;
}
.form-matrix-table tr:nth-child(2n) {
  background-color: #f2f2f2;
}
.form-all {
  color: #244b65;
}
.form-header-group .form-header {
  color: #244b65;
}
.form-header-group .form-subHeader {
  color: #31678b;
}
.form-sub-label {
  color: #31678b;
}
.form-label-top,
.form-label-left,
.form-label-right,
.form-html {
  color: #244b65;
}
.form-checkbox-item label,
.form-radio-item label {
  color: #31678b;
}
.form-line.form-line-active {
  -webkit-transition-property: all;
  -moz-transition-property: all;
  -ms-transition-property: all;
  -o-transition-property: all;
  transition-property: all;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: rgba(255, 255, 255, 0.75);
}
/* ömer */
.form-radio-item,
.form-checkbox-item {
  padding-bottom: 0px !important;
}
.form-radio-item:last-child,
.form-checkbox-item:last-child {
  padding-bottom: 0;
}
/* ömer */
[data-type="control_radio"] .form-input,
[data-type="control_checkbox"] .form-input,
[data-type="control_radio"] .form-input-wide,
[data-type="control_checkbox"] .form-input-wide {
  width: 100%;
  max-width: 315px;
}
.form-radio-item,
.form-checkbox-item {
  width: 100%;
  max-width: 315px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.form-textbox.form-radio-other-input,
.form-textbox.form-checkbox-other-input {
  width: 80%;
  margin-left: 3%;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.form-multiple-column {
  width: 100%;
}
.form-multiple-column .form-radio-item,
.form-multiple-column .form-checkbox-item {
  width: 10%;
}
.form-multiple-column[data-columncount="1"] .form-radio-item,
.form-multiple-column[data-columncount="1"] .form-checkbox-item {
  width: 100%;
}
.form-multiple-column[data-columncount="2"] .form-radio-item,
.form-multiple-column[data-columncount="2"] .form-checkbox-item {
  width: 50%;
}
.form-multiple-column[data-columncount="3"] .form-radio-item,
.form-multiple-column[data-columncount="3"] .form-checkbox-item {
  width: 33.33333333%;
}
.form-multiple-column[data-columncount="4"] .form-radio-item,
.form-multiple-column[data-columncount="4"] .form-checkbox-item {
  width: 25%;
}
.form-multiple-column[data-columncount="5"] .form-radio-item,
.form-multiple-column[data-columncount="5"] .form-checkbox-item {
  width: 20%;
}
.form-multiple-column[data-columncount="6"] .form-radio-item,
.form-multiple-column[data-columncount="6"] .form-checkbox-item {
  width: 16.66666667%;
}
.form-multiple-column[data-columncount="7"] .form-radio-item,
.form-multiple-column[data-columncount="7"] .form-checkbox-item {
  width: 14.28571429%;
}
.form-multiple-column[data-columncount="8"] .form-radio-item,
.form-multiple-column[data-columncount="8"] .form-checkbox-item {
  width: 12.5%;
}
.form-multiple-column[data-columncount="9"] .form-radio-item,
.form-multiple-column[data-columncount="9"] .form-checkbox-item {
  width: 11.11111111%;
}
.form-single-column .form-checkbox-item,
.form-single-column .form-radio-item {
  width: 100%;
}
.supernova {
  height: 100%;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.supernova {
  background-image: none;
}
#stage {
  background-image: none;
}
/* | */
.form-all {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.form-header-group {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
}
.form-line {
  margin-top: 4px;
  margin-bottom: 4px;
}
.form-line {
  padding: 10px 40px;
}
.form-all .form-textbox,
.form-all .form-radio-other-input,
.form-all .form-checkbox-other-input,
.form-all .form-captcha input,
.form-all .form-spinner input,
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next,
.form-all .qq-upload-button,
.form-all .form-error-message {
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
}
.form-all .form-textarea {
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
}
.form-all .form-submit-button,
.form-all .form-submit-reset,
.form-all .form-submit-print {
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
}
.form-all .form-sub-label {
  margin-left: 3px;
}
.form-all {
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
}
.form-section:first-child {
  -webkit-border-radius: 0px 0px 0 0;
  -moz-border-radius: 0px 0px 0 0;
  border-radius: 0px 0px 0 0;
}
.form-section:last-child {
  -webkit-border-radius: 0 0 0px 0px;
  -moz-border-radius: 0 0 0px 0px;
  border-radius: 0 0 0px 0px;
}
.form-all .qq-upload-button,
.form-all .form-submit-button,
.form-all .form-submit-reset,
.form-all .form-submit-print {
  font-size: 1em;
  padding: 9px 15px;
  font-family: "Lucida Grande", sans-serif;
  font-size: 14px;
  font-weight: bold;
}
.form-all .qq-upload-button,
.form-all .form-submit-button,
.form-all .form-submit-reset,
.form-all .form-submit-print {
  color: #f3f3f3 !important;
  background: #0f3f61;
  box-shadow: none;
  text-shadow: none;
}
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next {
  font-size: 1em;
  padding: 9px 15px;
  font-family: "Lucida Grande", sans-serif;
  font-size: 14px;
  font-weight: normal;
}
/*
& when ( @buttonFontType = google ) {
  @import (css) "@{buttonFontLink}";
}
*/
h2.form-header {
  line-height: 1.618em;
  font-size: 1.714em;
}
h2 ~ .form-subHeader {
  line-height: 1.5em;
  font-size: 1.071em;
}
.form-header-group {
  text-align: left;
}
.form-line {
  zoom: 1;
}
.form-line:before,
.form-line:after {
  display: table;
  content: '';
  line-height: 0;
}
.form-line:after {
  clear: both;
}
.form-sub-label-container {
  margin-right: 0;
  float: left;
  white-space: nowrap;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.form-sub-label-container .date-separate {
  visibility: hidden;
}
.form-captcha input,
.form-spinner input {
  width: 315px;
}
.form-textbox,
.form-textarea {
  width: 100%;
  max-width: 315px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.form-input,
.form-address-table,
.form-matrix-table {
  width: 100%;
  max-width: 315px;
}
.form-radio-item,
.form-checkbox-item {
  width: 100%;
  max-width: 315px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.form-textbox.form-radio-other-input,
.form-textbox.form-checkbox-other-input {
  width: 80%;
  margin-left: 3%;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.form-multiple-column {
  width: 100%;
}
.form-multiple-column .form-radio-item,
.form-multiple-column .form-checkbox-item {
  width: 10%;
}
.form-multiple-column[data-columncount="1"] .form-radio-item,
.form-multiple-column[data-columncount="1"] .form-checkbox-item {
  width: 100%;
}
.form-multiple-column[data-columncount="2"] .form-radio-item,
.form-multiple-column[data-columncount="2"] .form-checkbox-item {
  width: 50%;
}
.form-multiple-column[data-columncount="3"] .form-radio-item,
.form-multiple-column[data-columncount="3"] .form-checkbox-item {
  width: 33.33333333%;
}
.form-multiple-column[data-columncount="4"] .form-radio-item,
.form-multiple-column[data-columncount="4"] .form-checkbox-item {
  width: 25%;
}
.form-multiple-column[data-columncount="5"] .form-radio-item,
.form-multiple-column[data-columncount="5"] .form-checkbox-item {
  width: 20%;
}
.form-multiple-column[data-columncount="6"] .form-radio-item,
.form-multiple-column[data-columncount="6"] .form-checkbox-item {
  width: 16.66666667%;
}
.form-multiple-column[data-columncount="7"] .form-radio-item,
.form-multiple-column[data-columncount="7"] .form-checkbox-item {
  width: 14.28571429%;
}
.form-multiple-column[data-columncount="8"] .form-radio-item,
.form-multiple-column[data-columncount="8"] .form-checkbox-item {
  width: 12.5%;
}
.form-multiple-column[data-columncount="9"] .form-radio-item,
.form-multiple-column[data-columncount="9"] .form-checkbox-item {
  width: 11.11111111%;
}
[data-type="control_dropdown"] .form-dropdown {
  width: 100% !important;
  max-width: 315px;
}
[data-type="control_fullname"] .form-sub-label-container {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  width: 48%;
}
[data-type="control_fullname"] .form-sub-label-container:first-child {
  margin-right: 4%;
}
[data-type="control_phone"] .form-sub-label-container {
  width: 65%;
}
[data-type="control_phone"] .form-sub-label-container:first-child {
  width: 32.5%;
  margin-right: 2.5%;
}
[data-type="control_birthdate"] .form-sub-label-container {
  width: 22%;
  margin-right: 3%;
}
[data-type="control_birthdate"] .form-sub-label-container:first-child {
  width: 50%;
}
[data-type="control_birthdate"] .form-sub-label-container:last-child {
  margin-right: 0;
}
[data-type="control_birthdate"] .form-sub-label-container .form-dropdown {
  width: 100%;
}
[data-type="control_time"] .form-sub-label-container {
  width: 37%;
  margin-right: 3%;
}
[data-type="control_time"] .form-sub-label-container:last-child {
  width: 20%;
  margin-right: 0;
}
[data-type="control_time"] .form-sub-label-container .form-dropdown {
  width: 100%;
}
[data-type="control_datetime"] .form-sub-label-container {
  width: 28%;
  margin-right: 4%;
}
[data-type="control_datetime"] .form-sub-label-container:last-child {
  width: 4%;
  margin-right: 0;
}
[data-type="control_datetime"].allowTime .form-sub-label-container {
  width: 12%;
  margin-right: 3%;
}
[data-type="control_datetime"].allowTime .form-sub-label-container:last-child {
  width: 4%;
  margin-right: 0;
}
[data-type="control_datetime"].allowTime .allowTime-container {
  float: right;
  width: 51%;
}
[data-type="control_datetime"].allowTime .allowTime-container .form-sub-label-container {
  width: 27%;
  margin-right: 4%;
}
[data-type="control_datetime"].allowTime .allowTime-container .form-sub-label-container:first-child {
  width: 4%;
  margin-left: 3%;
}
[data-type="control_datetime"].allowTime .allowTime-container .form-sub-label-container:last-child {
  width: 27%;
  margin-right: 0;
}
[data-type="control_datetime"].allowTime .form-dropdown {
  width: 100%;
}
[data-type="control_payment"] .form-sub-label-container {
  width: auto;
}
[data-type="control_payment"] .form-sub-label-container .form-dropdown {
  width: 100%;
}
.form-address-table td .form-dropdown {
  width: 100%;
}
.form-address-table td .form-sub-label-container {
  width: 96%;
}
.form-address-table td:last-child .form-sub-label-container {
  margin-left: 4%;
}
.form-address-table td[colspan="2"] .form-sub-label-container {
  width: 100%;
  margin: 0;
}
/*.form-dropdown,
.form-radio-item,
.form-checkbox-item,
.form-radio-other-input,
.form-checkbox-other-input,*/
.form-captcha input,
.form-spinner input,
.form-error-message {
  padding: 4px 3px 2px 3px;
}
.form-header-group {
  font-family: "Lucida Grande", sans-serif;
}
.form-section {
  padding: 0px 0px 0px 0px;
}
.form-header-group {
  margin: 12px 36px 12px 36px;
}
.form-header-group {
  padding: 24px 0px 24px 0px;
}
.form-textbox,
.form-textarea {
  color: #15354a;
  padding: 4px 3px 2px 3px;
}
.form-textbox,
.form-textarea,
.form-radio-other-input,
.form-checkbox-other-input,
.form-captcha input,
.form-spinner input {
  background-color: #ffffff;
}
.form-textbox,
.form-textarea {
  width: 100%;
  max-width: 315px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
[data-type="control_textbox"] .form-input,
[data-type="control_textarea"] .form-input,
[data-type="control_fullname"] .form-input,
[data-type="control_phone"] .form-input,
[data-type="control_datetime"] .form-input,
[data-type="control_address"] .form-input,
[data-type="control_email"] .form-input,
[data-type="control_passwordbox"] .form-input,
[data-type="control_autocomp"] .form-input,
[data-type="control_textbox"] .form-input-wide,
[data-type="control_textarea"] .form-input-wide,
[data-type="control_fullname"] .form-input-wide,
[data-type="control_phone"] .form-input-wide,
[data-type="control_datetime"] .form-input-wide,
[data-type="control_address"] .form-input-wide,
[data-type="control_email"] .form-input-wide,
[data-type="control_passwordbox"] .form-input-wide,
[data-type="control_autocomp"] .form-input-wide {
  width: 100%;
  max-width: 315px;
}
[data-type="control_fullname"] .form-sub-label-container {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  width: 48%;
}
[data-type="control_fullname"] .form-sub-label-container:first-child {
  margin-right: 4%;
}
[data-type="control_phone"] .form-sub-label-container {
  width: 65%;
}
[data-type="control_phone"] .form-sub-label-container:first-child {
  width: 32.5%;
  margin-right: 2.5%;
}
[data-type="control_phone"] .form-sub-label-container .date-separate {
  visibility: hidden;
}
[data-type="control_datetime"] .form-sub-label-container {
  width: 28%;
  margin-right: 4%;
}
[data-type="control_datetime"] .form-sub-label-container:last-child {
  width: 4%;
  margin-right: 0;
}
[data-type="control_datetime"] .form-sub-label-container .date-separate {
  visibility: hidden;
}
[data-type="control_datetime"].allowTime .form-sub-label-container {
  width: 12%;
  margin-right: 3%;
}
[data-type="control_datetime"].allowTime .form-sub-label-container:last-child {
  width: 4%;
  margin-right: 0;
}
[data-type="control_datetime"].allowTime .allowTime-container {
  float: right;
  width: 51%;
}
[data-type="control_datetime"].allowTime .allowTime-container .form-sub-label-container {
  width: 27%;
  margin-right: 4%;
}
[data-type="control_datetime"].allowTime .allowTime-container .form-sub-label-container:first-child {
  width: 4%;
  margin-left: 3%;
}
[data-type="control_datetime"].allowTime .allowTime-container .form-sub-label-container:last-child {
  width: 27%;
  margin-right: 0;
}
[data-type="control_datetime"].allowTime .form-dropdown {
  width: 100%;
}
.form-matrix-table {
  width: 100%;
  max-width: 315px;
}
.form-address-table {
  width: 100%;
  max-width: 315px;
}
.form-address-table td .form-dropdown {
  width: 100%;
}
.form-address-table td .form-sub-label-container {
  width: 96%;
}
.form-address-table td:last-child .form-sub-label-container {
  margin-left: 4%;
}
.form-address-table td[colspan="2"] .form-sub-label-container {
  width: 100%;
  margin: 0;
}
[data-type="control_dropdown"] .form-input,
[data-type="control_birthdate"] .form-input,
[data-type="control_time"] .form-input,
[data-type="control_dropdown"] .form-input-wide,
[data-type="control_birthdate"] .form-input-wide,
[data-type="control_time"] .form-input-wide {
  width: 100%;
  max-width: 315px;
}
[data-type="control_dropdown"] .form-dropdown {
  width: 100% !important;
  max-width: 315px;
}
[data-type="control_birthdate"] .form-sub-label-container {
  width: 22%;
  margin-right: 3%;
}
[data-type="control_birthdate"] .form-sub-label-container:first-child {
  width: 50%;
}
[data-type="control_birthdate"] .form-sub-label-container:last-child {
  margin-right: 0;
}
[data-type="control_birthdate"] .form-sub-label-container .form-dropdown {
  width: 100%;
}
[data-type="control_time"] .form-sub-label-container {
  width: 37%;
  margin-right: 3%;
}
[data-type="control_time"] .form-sub-label-container:last-child {
  width: 20%;
  margin-right: 0;
}
[data-type="control_time"] .form-sub-label-container .form-dropdown {
  width: 100%;
}
.form-label {
  font-family: "Lucida Grande", sans-serif;
}
li[data-type="control_image"] div {
  text-align: Left;
}
li[data-type="control_image"] img {
  border: none;
  border-width: 0px !important;
  border-style: solid !important;
  border-color: false !important;
}
.form-line-column {
  width: auto;
}
.form-line-error {
  overflow: hidden;
  -webkit-transition-property: none;
  -moz-transition-property: none;
  -ms-transition-property: none;
  -o-transition-property: none;
  transition-property: none;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #fff4f4;
}
.form-line-error .form-error-message {
  background-color: #0b4c78;
  clear: both;
  float: none;
}
.form-line-error .form-error-message .form-error-arrow {
  border-bottom-color: #0b4c78;
}
.form-line-error input:not(#coupon-input),
.form-line-error textarea,
.form-line-error .form-validation-error {
  border: 1px solid #0b4c78;
  -webkit-box-shadow: 0 0 3px #0b4c78;
  -moz-box-shadow: 0 0 3px #0b4c78;
  box-shadow: 0 0 3px #0b4c78;
}
.ie-8 .form-all {
  margin-top: auto;
  margin-top: initial;
}
.ie-8 .form-all:before {
  display: none;
}
/* | */
@media screen and (max-width: 480px), screen and (max-device-width: 768px) and (orientation: portrait), screen and (max-device-width: 415px) and (orientation: landscape) {
  .jotform-form {
    padding: 0;
  }
  .form-all {
    border: 0;
    width: 100% !important;
    max-width: initial;
  }
  .form-sub-label-container {
    width: 100%;
    margin: 0;
  }
  .form-input {
    width: 100%;
  }
  .form-label {
    width: 100%!important;
  }
  .form-line {
    padding: 2% 5%;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }
  input[type=text],
  input[type=email],
  input[type=tel],
  textarea {
    width: 100%;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    max-width: initial !important;
  }
  .form-input,
  .form-input-wide,
  .form-textarea,
  .form-textbox,
  .form-dropdown {
    max-width: initial !important;
  }
  div.form-header-group {
    padding: 24px 0px !important;
    margin: 0 12px 2% !important;
    margin-left: 5% !important;
    margin-right: 5% !important;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }
  [data-type="control_button"] {
    margin-bottom: 0 !important;
  }
  .form-buttons-wrapper {
    margin: 0!important;
  }
  .form-buttons-wrapper button {
    width: 100%;
  }
  table {
    width: 100%!important;
    max-width: initial !important;
  }
  table td + td {
    padding-left: 3%;
  }
  .form-checkbox-item input,
  .form-radio-item input {
    width: auto;
  }
  .form-collapse-table {
    margin: 0 5%;
  }
}
/* | */

/*__INSPECT_SEPERATOR__*/

/* Injected CSS Code */
</style>

<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.526" type="text/javascript"></script>
<script src="https://js.jotform.com/vendor/postMessage.js?3.3.526" type="text/javascript"></script>
<script src="https://js.jotform.com/WidgetsServer.js?v=1496167611435" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/math-processor.js?v=3.3.526" type="text/javascript"></script>
<script type="text/javascript">
 JotForm.setCalculations([{"decimalPlaces":"2","equation":"[(((({14}+{15})/2)*6-50)/4)*(-1)]","ignoreHiddenFields":"","insertAsText":"","newCalculationType":"1","operands":"14,15","readOnly":"1","resultField":"7","showBeforeInput":"","showEmptyDecimals":"","useCommasForDecimals":""},{"decimalPlaces":"2","equation":"[(({14}+{15})/2)]","ignoreHiddenFields":"","insertAsText":"","newCalculationType":"1","operands":"14,15","readOnly":"1","resultField":"10","showBeforeInput":"","showEmptyDecimals":"","useCommasForDecimals":""}]);
 JotForm.setConditions([{"action":[{"id":"action_0_1462213407145","visibility":"Hide","isError":false,"field":"7"},{"id":"action_1_1462213407145","visibility":"Show","isError":false,"field":"23"}],"id":"1462213062973","index":"0","link":"All","priority":"0","terms":[{"id":"term_1462213423370","field":"14","operator":"isFilled","value":"","isError":false},{"id":"term_1462213419233","field":"15","operator":"isFilled","value":"","isError":false},{"id":"term_0_1462213407145","field":"10","operator":"lessThan","value":"4","isError":false}],"type":"field"},{"action":[{"id":"action_0_1462213434854","visibility":"Hide","isError":false,"field":"7"},{"id":"action_1_1462213434854","visibility":"Show","isError":false,"field":"22"}],"id":"1462209866066","index":"3","link":"All","priority":"3","terms":[{"id":"term_1462213442160","field":"14","operator":"isFilled","value":"","isError":false},{"id":"term_1462213438440","field":"15","operator":"isFilled","value":"","isError":false},{"id":"term_0_1462213434854","field":"10","operator":"greaterThan","value":"6.9","isError":false}],"type":"field"},{"action":[{"id":"action_0_1461765544993","visibility":"HideMultiple","isError":false,"fields":["10","7"]}],"id":"1460637735975","index":"4","link":"Any","priority":"4","terms":[{"id":"term_0_1461765544993","field":"14","operator":"isEmpty","value":"","isError":false},{"id":"term_1_1461765544993","field":"15","operator":"isEmpty","value":"","isError":false}],"type":"field"}]);
 JotForm.init(function(){
  JotForm.description('input_21', 'Cadeira/Disciplina');
  $('input_19_confirm').hint('Confirme seu E-mail');
  $$('#input_19_confirm')[0].setAttribute('onPaste', 'return false;');
  setTimeout(function() {
    $('input_19').hint('seuemail@exemplo.com');
  }, 20);
  JotForm.description('input_19', 'Digite seu e-mail');

  JotForm.calendarMonths = ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];
  JotForm.calendarDays = ["Domingo","Segunda-feira","Terça-feira","Quarta-feira","Quinta-feira","Sexta-feira","Sábado","Domingo"];
  JotForm.calendarOther = {"today":"Hoje"};
  JotForm.setCalendar("17", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});
  JotForm.description('input_17', 'Data da prova');
  JotForm.description('input_14', 'Insira uma nota válida de 0 a 10');
  JotForm.description('input_15', 'Insira uma nota válida de 0 a 10');
  JotForm.description('input_10', 'Resultado da sua média final.');
  JotForm.description('input_7', 'Resultado da nota necessária para a prova final.');
  JotForm.alterTexts({"alphabetic":"Este campo pode conter apenas letras","alphanumeric":"Este campo só pode conter letras e números.","ccInvalidCVC":"Single Product w/ Single Choice Orders ","ccInvalidExpireDate":"Expire date is invalid.","ccInvalidNumber":"Credit Card Number is invalid.","ccMissingDetails":"Please fill up the Credit Card details.","ccMissingDonation":"Please enter numeric values for donation amount.","ccMissingProduct":"Please select at least one product.","characterLimitError":"Too many Characters.  The limit is","characterMinLimitError":"Too few characters. The minimum is","confirmClearForm":"Você tem certeza que quer limpar este formulário?","confirmEmail":"E-mail não confere","currency":"Este campo apenas admite valores monetários.","cyrillic":"Este campo aceita apenas caracteres cirilicos.","dateInvalid":"This date is not valid. The date format is {format}","dateLimited":"This date is unavailable.","disallowDecimals":"Please enter a whole number.","email":"Digite um endereço de e-mail válido.","fillMask":"Valor do campo deve preencher máscara.","freeEmailError":"Free email accounts are not allowed","generalError":"Existem alguns erros no formulário. Corrija-os antes de continuar. ","generalPageError":"Há erros nesta página. Por favor, corrija-os antes de continuar.","gradingScoreError":"Pontuação total deve ser menor ou igual a ","incompleteFields":"Há campos obrigatórios incompletos. Por favor, preencha-os.","inputCarretErrorA":"A entrada não deve ser menor do que o valor mínimo:","inputCarretErrorB":"Valor não deve ser maior do que o máximo:","lessThan":"A sua pontuação deve ser inferior ou igual a","maxDigitsError":"O numero máximo de caracteres permitidos são","maxSelectionsError":"O número máximo de seleções permitido é","minSelectionsError":"O número mínimo exigido de seleções é","multipleFileUploads_emptyError":"{file} está vazio, por favor selecione os arquivos de novo.","multipleFileUploads_fileLimitError":"Somente são permitidos {fileLimit} envios de arquivos","multipleFileUploads_minSizeError":"{file} é muito pequeno, o tamanho mínimo do arquivo é {minSizeLimit}.","multipleFileUploads_onLeave":"Os arquivos agora estão em upload, se você sair agora o upload será cancelado.","multipleFileUploads_sizeError":"{file} é muito grande, o tamanho máximo é {sizeLimit}.","multipleFileUploads_typeError":"O arquivo {file} é inválido, pois somente as extensões {extensions} são permitidas.","numeric":"Este campo pode conter apenas números","pastDatesDisallowed":"A data não pode ser passada.","pleaseWait":"Por favor aguarde...","required":"Este campo é obrigatório.","requireEveryCell":"Toda célula é requisitada.","requireEveryRow":"Todos os campos são requeridos.","requireOne":"Pelo menos um campo é requisitado","submissionLimit":"Foi mal, mas apenas um envio de dados é permitido. Múltiplas submissões estão desativadas nesse formulário.","uploadExtensions":"Só pode fazer upload dos seguintes ficheiros:","uploadFilesize":"O tamanho do arquivo não pode ser maior que:","uploadFilesizemin":"O ficheiro não pode ser menor que:","url":"This field can only contain a valid URL","wordLimitError":"Too many words. The limit is","wordMinLimitError":"Too few words.  The minimum is"});
  JotForm.clearFieldOnHide="disable";
});

JotForm.prepareCalculationsOnTheFly([null,null,null,null,null,null,null,{"name":"Resultado","qid":"7","text":"Nota necessaria:","type":"control_calculation"},null,null,{"name":"Resultado10","qid":"10","text":"Sua media:","type":"control_calculation"},{"name":"cliquePara","qid":"11","text":" ","type":"control_widget"},null,null,{"name":"numero1","qid":"14","text":"1º Estagio","type":"control_number"},{"name":"2Estagio","qid":"15","text":"2º Estagio","type":"control_number"},null,{"name":"data","qid":"17","text":"Data","type":"control_datetime"},null,{"name":"email","qid":"19","text":"E-mail","type":"control_email"},{"name":"enviar","qid":"20","text":"Enviar","type":"control_button"},{"name":"disciplina","qid":"21","text":"Disciplina","type":"control_textbox"},{"name":"cliqueDuas","qid":"22","text":"<p><span style=\"font-size:8pt;font-family:tahoma, arial, helvetica, sans-serif;\"><strong><span style=\"color:#3366ff;\">Aprovado</span></strong></span></p>","type":"control_text"},{"name":"cliqueDuas23","qid":"23","text":"<p><span style=\"font-size:8pt;font-family:tahoma, arial, helvetica, sans-serif;\"><strong><span style=\"color:#ff0000;\">Reprovado</span></strong></span></p>","type":"control_text"},{"name":"cliqueDuas24","qid":"24","text":"<p style=\"text-align:justify;\"><span style=\"font-size:8pt;color:#333399;font-family:tahoma, arial, helvetica, sans-serif;\"><strong>*Obs:</strong></span></p>\n<ul><li style=\"text-align:justify;\"><span style=\"font-size:8pt;color:#333399;font-family:tahoma, arial, helvetica, sans-serif;\">Media minima de aprovacao = 7.0;</span></li>\n<li style=\"text-align:justify;\"><span style=\"font-size:8pt;color:#333399;font-family:tahoma, arial, helvetica, sans-serif;\">Media minima necessaria para a final = 4.0;</span></li>\n<li style=\"text-align:justify;\"><span style=\"color:#333399;font-family:tahoma, arial, helvetica, sans-serif;\"><span style=\"font-size:10.6667px;\">A nota minima a ser obtida na prova final e 4.0.</span></span></li>\n</ul>","type":"control_text"}]);</script>
</head>
<body>
  <form class="jotform-form" action="https://submit.jotformz.com/submit/60976831081662/" method="post" name="form_60976831081662" id="60976831081662" accept-charset="utf-8">
    <input type="hidden" name="formID" value="60976831081662" />
    <div class="form-all">
      <ul class="form-section page-section">
        <li class="form-line" data-type="control_textbox" id="id_21">
          <label class="form-label form-label-left form-label-auto" id="label_21" for="input_21"> Disciplina </label>
          <div id="cid_21" class="form-input jf-required">
            <input type="text" id="input_21" name="q21_disciplina" data-type="input-textbox" class="form-textbox" size="20" value="" placeholder=" " data-component="textbox" />
          </div>
        </li>
        <li class="form-line jf-required" data-type="control_email" id="id_19">
          <label class="form-label form-label-left form-label-auto" id="label_19" for="input_19">
            E-mail
            <span class="form-required">
              *
            </span>
          </label>
          <div id="cid_19" class="form-input jf-required">
            <div data-wrapper-react="true">
              <input type="email" id="input_19" name="q19_email" class="form-textbox validate[required, Email]" size="30" value="" placeholder="seuemail@exemplo.com" data-component="email" required="" />
              <br/>
              <label class="form-sub-label" style="display:none;" for="input_19_confirm"> Confirmation Email </label>
              <input type="email" id="input_19_confirm" name="q19_email" class="form-textbox validate[required, Email, Email_Confirm]" style="margin-top:8px;" size="30" value="" placeholder="Confirme seu E-mail" data-component="emailConfirmation" />
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_datetime" id="id_17">
          <label class="form-label form-label-left form-label-auto" id="label_17" for="input_17"> Data </label>
          <div id="cid_17" class="form-input jf-required">
            <div data-wrapper-react="true">
              <span class="form-sub-label-container" style="vertical-align:top;">
                <input class="form-textbox validate[limitDate]" id="day_17" name="q17_data[day]" type="tel" size="2" data-maxlength="2" value="" />
                <span class="date-separate">
                   -
                </span>
                <label class="form-sub-label" for="day_17" id="sublabel_day" style="min-height:13px;"> dia </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top;">
                <input class="form-textbox validate[limitDate]" id="month_17" name="q17_data[month]" type="tel" size="2" data-maxlength="2" value="" />
                <span class="date-separate">
                   -
                </span>
                <label class="form-sub-label" for="month_17" id="sublabel_month" style="min-height:13px;"> mês </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top;">
                <input class="form-textbox validate[limitDate]" id="year_17" name="q17_data[year]" type="tel" size="4" data-maxlength="4" value="" />
                <label class="form-sub-label" for="year_17" id="sublabel_year" style="min-height:13px;"> ano </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top;">
                <img class="showAutoCalendar" alt="Pick a Date" id="input_17_pick" src="https://cdn.jotfor.ms/images/calendar.png" style="vertical-align:middle;" data-component="datetime" />
                <label class="form-sub-label" for="input_17_pick" style="min-height:13px;">  </label>
              </span>
            </div>
          </div>
        </li>
        <li class="form-line jf-required" data-type="control_number" id="id_14">
          <label class="form-label form-label-left form-label-auto" id="label_14" for="input_14">
            1º Estágio
            <span class="form-required">
              *
            </span>
          </label>
          <div id="cid_14" class="form-input jf-required">
            <input type="number" id="input_14" name="q14_numero1" data-type="input-number" class=" form-number-input form-textbox validate[required]" style="width:52px;" size="4" value="" maxlength="4" placeholder=" " data-numbermin="0.00" data-numbermax="10.00" data-component="number" required="" />
          </div>
        </li>
        <li class="form-line jf-required" data-type="control_number" id="id_15">
          <label class="form-label form-label-left form-label-auto" id="label_15" for="input_15">
            2º Estágio
            <span class="form-required">
              *
            </span>
          </label>
          <div id="cid_15" class="form-input jf-required">
            <input type="number" id="input_15" name="q15_2Estagio" data-type="input-number" class=" form-number-input form-textbox validate[required]" style="width:52px;" size="4" value="" maxlength="4" placeholder=" " data-numbermin="0.00" data-numbermax="10.00" data-component="number" required="" />
          </div>
        </li>
        <li class="form-line form-field-hidden" style="display:none;" data-type="control_calculation" id="id_10">
          <label class="form-label form-label-left form-label-auto" id="label_10" for="input_10"> Sua média: </label>
          <div id="cid_10" class="form-input jf-required">
            <input data-component="calculation" type="text" data-defaultvalue="" class="form-textbox" data-type="input-textbox" id="input_10" name="q10_Resultado10" value="" size="10" />
          </div>
        </li>
        <li class="form-line form-field-hidden" style="display:none;" data-type="control_calculation" id="id_7">
          <label class="form-label form-label-left form-label-auto" id="label_7" for="input_7"> Nota necessária: </label>
          <div id="cid_7" class="form-input jf-required">
            <input data-component="calculation" type="text" data-defaultvalue="" class="form-textbox" data-type="input-textbox" id="input_7" name="q7_Resultado" value="" size="30" />
          </div>
        </li>
        <li class="form-line form-line-column form-col-1" data-type="control_text" id="id_24">
          <div id="cid_24" class="form-input-wide">
            <div id="text_24" class="form-html" data-component="text">
              <p style="text-align:justify;"><span style="font-size:8pt;color:#333399;font-family:tahoma, arial, helvetica, sans-serif;"><strong>*Obs:</strong></span></p>
              <ul>
                <li style="text-align:justify;">
                  <span style="font-size:8pt;color:#333399;font-family:tahoma, arial, helvetica, sans-serif;">
                    Média mínima de aprovação = 7.0;
                  </span>
                </li>
                <li style="text-align:justify;">
                  <span style="font-size:8pt;color:#333399;font-family:tahoma, arial, helvetica, sans-serif;">
                    Média mínima necessária para a final = 4.0;
                  </span>
                </li>
                <li style="text-align:justify;">
                  <span style="color:#333399;font-family:tahoma, arial, helvetica, sans-serif;">
                    <span style="font-size:10.6667px;">
                      A nota mínima a ser obtida na prova final é 4.0.
                    </span>
                  </span>
                </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="form-line form-line-column form-col-2 always-hidden form-field-hidden" style="display:none;" data-type="control_text" id="id_22">
          <div id="cid_22" class="form-input-wide always-hidden">
            <div id="text_22" class="form-html" data-component="text">
              <p><span style="font-size:8pt;font-family:tahoma, arial, helvetica, sans-serif;"><strong><span style="color:#3366ff;">Aprovado</span></strong></span></p>
            </div>
          </div>
        </li>
        <li class="form-line form-line-column form-col-3 always-hidden form-field-hidden" style="display:none;" data-type="control_text" id="id_23">
          <div id="cid_23" class="form-input-wide always-hidden">
            <div id="text_23" class="form-html" data-component="text">
              <p><span style="font-size:8pt;font-family:tahoma, arial, helvetica, sans-serif;"><strong><span style="color:#ff0000;">Reprovado</span></strong></span></p>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_button" id="id_20">
          <div id="cid_20" class="form-input-wide">
            <div style="margin-left:156px;" class="form-buttons-wrapper">
              <button id="input_20" type="submit" class="form-submit-button" data-component="button">
                Enviar
              </button>
              <span>
                 
              </span>
              <button id="input_reset_20" type="reset" class="form-submit-reset" data-component="button">
                Limpar Formulário
              </button>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_widget" id="id_11">
          <div id="cid_11" class=" jf-required">
            <div style="width:100%;text-align:Left;" data-component="widget-directEmbed">
              <div class="direct-embed-widgets " data-type="direct-embed" style="width:1px;height:1px;">
                <script type="text/javascript" src="https://widgets.jotform.io/mobileResponsive/mobile.responsive.js"></script>
              </div>
            </div>
          </div>
        </li>
        <li style="clear:both">
        </li>
        <li style="display:none">
          Should be Empty:
          <input type="text" name="website" value="" />
        </li>
      </ul>
    </div>
    <script>
      JotForm.showJotFormPowered = "0";
    </script>
    <input type="hidden" id="simple_spc" name="simple_spc" value="60976831081662" />
    <script type="text/javascript">
      document.getElementById("si" + "mple" + "_spc").value = "60976831081662-60976831081662";
    </script>
    <script src="https://cdn.jotfor.ms/js/widgetResizer.js?REV=3.3.526" type="text/javascript"></script>
  </form></body>
  </html>
  <script type="text/javascript">JotForm.ownerView=true;</script>
</div><!-- .post -->
</div><!-- conteudo -->

<?php include (TEMPLATEPATH . '/sidebar-intersocial.php'); ?>

</div><!-- #content -->
</div><!-- #container -->

<?php get_footer() ?>