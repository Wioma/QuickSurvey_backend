<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_f7f177cbced10e49f2a01c1dc062add94bf56d97bb5624a7836351e521667326 extends Twig_Template
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
        $__internal_a284096c121f6f0c67aa8556fb444c1b303e012074c1dd03035a4a161fb55bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a284096c121f6f0c67aa8556fb444c1b303e012074c1dd03035a4a161fb55bad->enter($__internal_a284096c121f6f0c67aa8556fb444c1b303e012074c1dd03035a4a161fb55bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_a647c9aa038e13f20875f458425173336febf8be52efcde541dc2358d2c4acef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a647c9aa038e13f20875f458425173336febf8be52efcde541dc2358d2c4acef->enter($__internal_a647c9aa038e13f20875f458425173336febf8be52efcde541dc2358d2c4acef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a284096c121f6f0c67aa8556fb444c1b303e012074c1dd03035a4a161fb55bad->leave($__internal_a284096c121f6f0c67aa8556fb444c1b303e012074c1dd03035a4a161fb55bad_prof);

        
        $__internal_a647c9aa038e13f20875f458425173336febf8be52efcde541dc2358d2c4acef->leave($__internal_a647c9aa038e13f20875f458425173336febf8be52efcde541dc2358d2c4acef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
