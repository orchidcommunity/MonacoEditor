# MonacoEditor
Monaco Editor  - code editor for Orchid Platform

![Editor](https://cloud.githubusercontent.com/assets/5047891/19600675/5eaae9e6-97a6-11e6-97ad-93903167d8ba.png)

1. Add string to config/platform.php
```
'fields' => [
 ...
'monacoeditor' => Orchids\MonacoEditor\Fields\Types\MonacoEditorField::class, 
```
2. Execute the following command
```
php artisan vendor:publish --provider="Orchids\MonacoEditor\Providers\MonacoEditorServiceProvider"
```
3.Add field in project
```
Field::tag('monacoeditor')
       ->name('code')
       ->title('Code Block')
       ->help('Simple web editor'),
```
