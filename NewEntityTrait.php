<?php
// здесь можно описать код единый для всех сущностей переопределенных (нельзя просто унаследоваться от класса какого то отличного от одноименного с сущностью, например NewPlayer должен быть насоедником Player и тд)
// таким кодом может быть присовение другого обработчика $this->{events,components,positions,forward} 
trait NewEntityTrait
{							

}