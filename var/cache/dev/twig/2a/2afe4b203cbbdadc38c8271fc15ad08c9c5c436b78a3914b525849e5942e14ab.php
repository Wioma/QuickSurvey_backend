<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_1968da54b1b82501e6c6639697ad7249f50d9a3283927f4b596619b1998623c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cfd5a5a88c093e736dbed784a1672b8cc1ddcdd58d81efcda9f72d5a5b56eae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cfd5a5a88c093e736dbed784a1672b8cc1ddcdd58d81efcda9f72d5a5b56eae->enter($__internal_2cfd5a5a88c093e736dbed784a1672b8cc1ddcdd58d81efcda9f72d5a5b56eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_cfea73adc97ae7acaacec8d3909937773723596da2e8b0c495fe44c2baf956e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfea73adc97ae7acaacec8d3909937773723596da2e8b0c495fe44c2baf956e9->enter($__internal_cfea73adc97ae7acaacec8d3909937773723596da2e8b0c495fe44c2baf956e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_2cfd5a5a88c093e736dbed784a1672b8cc1ddcdd58d81efcda9f72d5a5b56eae->leave($__internal_2cfd5a5a88c093e736dbed784a1672b8cc1ddcdd58d81efcda9f72d5a5b56eae_prof);

        
        $__internal_cfea73adc97ae7acaacec8d3909937773723596da2e8b0c495fe44c2baf956e9->leave($__internal_cfea73adc97ae7acaacec8d3909937773723596da2e8b0c495fe44c2baf956e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
