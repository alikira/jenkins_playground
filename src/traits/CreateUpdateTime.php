<?php

namespace jenkins_playground\src\traits;

trait CreateUpdateTime {


private $createdAt;

private $updatedAt;



public function getCreatedAt(){

return $this->createdAt;

}

public function getUpdatedAt(){

return $this->updatedAt;

}
