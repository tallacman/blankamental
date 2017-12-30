<?php
namespace Concrete\Package\Blankamental\Theme\Blankamental;

use Concrete\Core\Area\Layout\Preset\Provider\ThemeProviderInterface;

class PageTheme extends \Concrete\Core\Page\Theme\Theme implements ThemeProviderInterface
{
    public function registerAssets()
    {
        //$this->providesAsset('javascript', 'bootstrap/*');
    //    $this->providesAsset('css', 'bootstrap/*');
    //    $this->providesAsset('css', 'blocks/form');
    //    $this->providesAsset('css', 'blocks/social_links');
    //    $this->providesAsset('css', 'blocks/share_this_page');
    //    $this->providesAsset('css', 'blocks/feature');
    //    $this->providesAsset('css', 'blocks/testimonial');
    //    $this->providesAsset('css', 'blocks/date_navigation');
    //    $this->providesAsset('css', 'blocks/topic_list');
    //    $this->providesAsset('css', 'blocks/faq');
    //    $this->providesAsset('css', 'blocks/tags');
    //    $this->providesAsset('css', 'core/frontend/*');
    //    $this->providesAsset('css', 'blocks/feature/templates/hover_description');

    //    $this->providesAsset('css', 'blocks/event_list');

        $this->requireAsset('css', 'font-awesome');
        $this->requireAsset('javascript', 'jquery');
        $this->requireAsset('javascript', 'picturefill');
        $this->requireAsset('javascript-conditional', 'html5-shiv');
        $this->requireAsset('javascript-conditional', 'respond');
    }

    protected $pThemeGridFrameworkHandle = 'bootstrap3';

    public function getThemeName()
    {
        return t('Blankamental');
    }

    public function getThemeDescription()
    {
        return t('A blank theme. Contains all the Elemental areas without any surrounding html and a blank css/less file.');
    }

    public function getThemeBlockClasses()
    {
        return array(

        );
    }

    public function getThemeAreaClasses()
    {
        return array(

        );
    }

    public function getThemeDefaultBlockTemplates()
    {
        return array(

        );
    }

    public function getThemeResponsiveImageMap()
    {
        return array(
            'large' => '900px',
            'medium' => '768px',
            'small' => '0',
        );
    }

    public function getThemeEditorClasses()
    {
        return array(

        );
    }

    public function getThemeAreaLayoutPresets()
    {
        $presets = array(

        );
        return $presets;
    }
}
