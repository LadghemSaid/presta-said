<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.data_provider.customer_decorator' shared service.

return $this->services['prestashop.core.grid.data_provider.customer_decorator'] = new \PrestaShop\PrestaShop\Core\Grid\Data\Factory\CustomerGridDataFactoryDecorator(${($_ = isset($this->services['prestashop.core.grid.data_provider.customer']) ? $this->services['prestashop.core.grid.data_provider.customer'] : $this->load('getPrestashop_Core_Grid_DataProvider_CustomerService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.localization.locale.repository']) ? $this->services['prestashop.core.localization.locale.repository'] : $this->load('getPrestashop_Core_Localization_Locale_RepositoryService.php')) && false ?: '_'}->getLocale(${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->language->getLocale()), ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->currency->iso_code);