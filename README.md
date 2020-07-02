Перевод CAML запроса в строковое представление для OData

$camlParser = new CamlParser($your_CAML_as_string);
$OData_filter_string = $camlParser->getFilter();