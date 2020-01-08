function cleaner() {
  $("#box").html("");
  $("#myForm, input[type=text]").val("");
}
function printData(data) {
  cleaner();
  var template = $("#template").html();
  var compiled = Handlebars.compile(template);
  for (i = 0; i < data.length; i++) {
    var match = data[i];
    var compiledMatch = compiled(match);
    $("#box").append(compiledMatch);
  }
}

function getData() {
  $.ajax({
    url: "data.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      //   printData(data);
      printData(data);
    },
    error: function(error) {
      console.log("error", error);
    }
  });
}

function newConfigurazione() {
  var me = $(this);
  $.ajax({
    url: "newConfigurazione.php",
    method: "POST",
    data: me.serialize(),
    success: function(data) {
      if (data) {
        getData(data);
      }
    },
    error: function(error) {
      console.log("error", error);
    }
  });
  return false;
}
function delConfigurazione(elem) {
  $.ajax({
    url: "delConfigurazione.php",
    method: "POST",
    data: {
      id: elem
    },
    success: function(data) {
      if (data) {
        getData(data);
      }
    },
    error: function(error) {
      console.log("error", error);
    }
  });
}
function updConfigurazione() {
  var me = $(this);
  var nTitle = prompt("Inserisci il nuovo titolo");
  var nDesc = prompt("Inserisci la nuova descrizione");
  var id = me.parents(".match").data("id");
  console.log(id);
  $.ajax({
    url: "updConfigurazione.php",
    method: "POST",
    data: {
      title: nTitle,
      description: nDesc,
      id: id
    },
    success: function(data) {
      if (data) {
        getData(data);
      }
      // printData(data);
    },
    error: function(error) {
      console.log("error", error);
    }
  });
  return false;
}
function init() {
  getData();
  $("#myForm ").submit(newConfigurazione);
  $("#myForm2").submit(updConfigurazione);
  $(this).on("click", ".delete", function() {
    var id = $(this)
      .parents(".match")
      .data("id");
    console.log(id);
    delConfigurazione(id);
  });
  $(this).on("click", ".upd", updConfigurazione);
}

$(document).ready(init);
