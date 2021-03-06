function validateNote(update = false){
  var msg = "";

  if(update && valueById("txtId") <= 0)
  msg += "<p>- ID não encontrado</p>";

  if(valueById("txtTitle").length < 3 || valueById("txtTitle").length > 150)
  msg += "<p>- Título inválido</p>";

  if(CKEDITOR.instances['txtDescription'].getData().length < 10)
  msg += "<p>- Descrição inválida</p>";

  if(valueById("slStatus") < 1 || valueById("slStatus") > 2)
  msg += "<p>- Status inválido</p>";

  if(valueById("slColor") == "")
  msg += "<p>- Cor inválida</p>";

  setHTMLById("dvAlert", msg);

  return msg == "";
}
