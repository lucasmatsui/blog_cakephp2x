<?php
App::uses('ClassRegistry', 'Utility');
App::uses('LogListener', 'Event');
$User = ClassRegistry::init('User');
$Post = ClassRegistry::init('Post');

$User->getEventManager()->attach(new LogListener());
$Post->getEventManager()->attach(new LogListener());


