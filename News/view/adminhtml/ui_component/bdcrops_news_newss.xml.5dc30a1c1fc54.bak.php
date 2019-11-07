<?xml version="1.0"?>
<listing xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:module:Magento_Ui:etc/ui_configuration.xsd">
    <argument name="data" xsi:type="array">
        <item name="js_config" xsi:type="array">
            <item name="provider" xsi:type="string">bdcrops_news_newss.bdcrops_news_newss_data_source</item>
            <item name="deps" xsi:type="string">bdcrops_news_newss.bdcrops_news_newss_data_source</item>
        </item>
        <item name="spinner" xsi:type="string">bdcrops_news_newss_columns</item>
        <item name="buttons" xsi:type="array">
            <item name="add" xsi:type="array">
                <item name="name" xsi:type="string">add</item>
                <item name="label" xsi:type="string">Add New</item>
                <item name="class" xsi:type="string">primary</item>
                <item name="url" xsi:type="string">*/News/new</item>
            </item>
        </item>
    </argument>
    <dataSource name="bdcrops_news_newss_data_source">
        <argument name="dataProvider" xsi:type="configurableObject">
            <argument name="class" xsi:type="string">Bdcrops\News\Ui\Component\Listing\DataProviders\Bdcrops\News\Newss</argument>
            <argument name="name" xsi:type="string">bdcrops_news_newss_data_source</argument>
            <argument name="primaryFieldName" xsi:type="string">news_id</argument>
            <argument name="requestFieldName" xsi:type="string">id</argument>
            <argument name="data" xsi:type="array">
                <item name="config" xsi:type="array">
                    <item name="update_url" xsi:type="url" path="mui/index/render"/>
                    <item name="storageConfig" xsi:type="array">
                        <item name="indexField" xsi:type="string">news_id</item>
                    </item>
                </item>
            </argument>
        </argument>
        <argument name="data" xsi:type="array">
            <item name="js_config" xsi:type="array">
                <item name="component" xsi:type="string">Magento_Ui/js/grid/provider</item>
            </item>
        </argument>
    </dataSource>
    <listingToolbar name="listing_top">
        <settings>
            <sticky>true</sticky>
        </settings>
        <paging name="listing_paging"/>
        <filters name="listing_filters"/>
    </listingToolbar>
    <columns name="bdcrops_news_newss_columns">
        <selectionsColumn name="ids">
            <argument name="data" xsi:type="array">
                <item name="config" xsi:type="array">
                    <item name="resizeEnabled" xsi:type="boolean">false</item>
                    <item name="resizeDefaultWidth" xsi:type="string">55</item>
                    <item name="indexField" xsi:type="string">news_id</item>
                    <item name="sortOrder" xsi:type="number">10</item>
                </item>
            </argument>
        </selectionsColumn>
        <column name="news_id">
            <argument name="data" xsi:type="array">
                <item name="config" xsi:type="array">
                    <item name="filter" xsi:type="string">textRange</item>
                    <item name="sorting" xsi:type="string">asc</item>
                    <item name="label" xsi:type="string" translate="true">ID</item>
                </item>
            </argument>
        </column>
        <actionsColumn name="actions" class="Bdcrops\News\Ui\Component\Listing\Column\Bdcropsnewsnewss\PageActions">
            <argument name="data" xsi:type="array">
                <item name="config" xsi:type="array">
                    <item name="resizeEnabled" xsi:type="boolean">false</item>
                    <item name="resizeDefaultWidth" xsi:type="string">107</item>
                    <item name="indexField" xsi:type="string">news_id</item>
                    <item name="sortOrder" xsi:type="number">200</item>
                </item>
            </argument>
        </actionsColumn>
    </columns>
</listing>
