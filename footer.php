<!-- NOTHING BUT BOTTOM GOES HERE !!!!!!
MAYBE SOME JS OR SUCH ?? -->
<style>
* {
  box-sizing: border-box;
}

.flex-container {
  display: flex;
  flex-direction: row;
  font-size: 30px;
  text-align: center;
}

.flex-item-left {
  background-color: #f1f1f1;
  padding: 10px;
  flex: 50%;
}

.flex-item-right {
  background-color: dodgerblue;
  padding: 10px;
  flex: 50%;
}
.flex-item-gen {
  background-color: dodgerblue;
  padding: 10px;
  flex: 33%;
}

/* Responsive layout - makes a one column-layout instead of two-column layout */
@media (max-width: 500px) {
  .flex-container {
    flex-direction: column;
  }
}
</style>

<div id ="bottom" class="bottom"><p>you can contact us here</p>
    <div class="flex-container">
    <div class="flex-item-gen">1</div>
    <div class="flex-item-gen">2</div>
    <div class="flex-item-gen">2.1</div>
    </div>

</div>
<!-- "Capitalist production, therefore, develops technology, and the combining together of various processes into a social whole, only by sapping the original sources of all wealth - the soil and the laborer." Karl Marx  -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

<script src="./js/new.js">



</script>