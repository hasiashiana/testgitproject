<?php

abstract class BaseUser {}
abstract class WebUser extends BaseUser {}
class RegularUser extends WebUser {}
class AdminUser extends RegularUser {}
class PowerAdminUser extends RegularUser {}
class WipFunctionalityUser extends RegularUser {}
