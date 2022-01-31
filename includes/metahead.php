<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!-- Bootstrap CSS -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link type="text/css" rel="stylesheet" href="assets/css/lightgallery.css" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> -->
<link href="assets/dist/style.min.css?ver=0.0.1" rel="stylesheet" >
<title>Relegius Circuit</title>
<style>
    input {
  position: absolute;
  opacity: 0;
  z-index: -1;
}
 /* Accordion styles */
.tabs {
  /* border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 4px -2px rgba(0, 0, 0, 0.5); */
  max-width: 780px;
  margin: auto;
}

.tab {
  width: 100%;margin-bottom: 5px;
}
.tab-label {
    margin: 0px;
    background: #ffffff;
    width: 100%;
    border: 1px solid #daddd8;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  cursor: pointer;
  padding: 14px 15px 13px 35px;
    line-height: normal;
    display: block;
    font-size: 14px;
    color: #1c1c1c;
    background: #f6f6f6;
  /* Icon */
}
.tab-label:hover {
  /* background: #1a252f; */
}
.tab-label::before {
  content: "\f0a4";
  font-family: "Font Awesome 5 Pro";
  width: 1em;
  height: 1em;
  text-align: center;
  transition: all 0.35s;
  padding-right: 15px;
}
.tab-content {
    background: #ffffff;
    position: relative;
    margin: 0px;
    width: 100%;
    padding: 0 1rem;
    max-height: 0;
    color: #333;
    transition: all 0.35s;
    overflow: hidden;
}
.tab-close {
  display: flex;
  justify-content: flex-end;
  padding: 1em;
  font-size: 0.75em;
  color: #2c3e50;
  cursor: pointer;
}
.tab-close:hover {
  /* background: #1a252f; */
}

input:checked + .tab-label {
    border-bottom-color: #e19c1e !important;
    border-bottom: 3px solid;
}
input:checked + .tab-label::after {
  transform: rotate(90deg);
}
input:checked ~ .tab-content {
  max-height: 100vh;
  padding: 1em;
}
</style>
</head>
