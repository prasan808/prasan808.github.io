<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
<link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');  ?>" />
<style>
  .avatar {
  vertical-align: middle;
  width: 150px;
  height: 90px;
  border-radius: 50%;
}
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto auto;
  grid-gap: 10px;
  background-color: rgba(255, 255, 255, 0.8);
  padding: 30px;
}

.grid-container > div {
  background-color: #2196F3;
  text-align: center;
  padding: 90px 0;
  font-size: 30px;
}

.item1 {
  grid-row: 1/4;
}
.item4 {
  grid-area: 2 / 2 / 4 / 4;
}
.item5 {
  grid-area: 2 / 4 / 4 / 6;
}
h6{
  color: white;
}
h3{
  color: white;
}
a{
  color: white;
}
li{
  color: white;
}
</style>
</head>
<body>
 

<div class="grid-container">
  <div class="item1">
    <h3>MENU</h3><br>
    <h6><a href="#">Data Entry</a></h6>
    <h6><a href="#">Data View</a></h6>
    <h6>-ST1</h6>
    <ul>
      <h6><li><a href="#">Top Buy</a></li></h6>
      <ul style="list-style-type:disc;">
        <h6><li><a href="#">Sector</a></li></h6>
      </ul>
         <h6><li><a href="#">Top Sell</a></li></h6>
          <ul style="list-style-type:disc;">
        <h6><li><a href="#">Sector</a></li></h6>
      </ul>
    </ul>
  </div>
  <div class="item2"><h6><a href="#">Market Info 1</a></h6></div>
  <div class="item3"><h6><a href="#">Market Info 1</a></h6></div> 
  <div class="item2"><h6><a href="#">Market Info 1</a></h6></div>
  <div class="item3"><h6><a href="#">Market Info 1</a></h6></div>  
  <div class="item4"><h6>Market Confidence Meter</h6></div>
  <div class="item5"><h6>Alerts</h6></div>
</div>



</body>
</html>