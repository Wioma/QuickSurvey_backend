<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_a252de1628248b6983a206065f565bb88f264cc184db1925572c9c643fdb631d extends Twig_Template
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
        $__internal_38b3586c64fb7436083e6fed193b812e885a41c9dac7e7f9087dc706878bdf3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b3586c64fb7436083e6fed193b812e885a41c9dac7e7f9087dc706878bdf3e->enter($__internal_38b3586c64fb7436083e6fed193b812e885a41c9dac7e7f9087dc706878bdf3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_6edc734f8e0414baa6701f58d368b92555230e1e9bf5b45e7b38929a66a073fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6edc734f8e0414baa6701f58d368b92555230e1e9bf5b45e7b38929a66a073fb->enter($__internal_6edc734f8e0414baa6701f58d368b92555230e1e9bf5b45e7b38929a66a073fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_38b3586c64fb7436083e6fed193b812e885a41c9dac7e7f9087dc706878bdf3e->leave($__internal_38b3586c64fb7436083e6fed193b812e885a41c9dac7e7f9087dc706878bdf3e_prof);

        
        $__internal_6edc734f8e0414baa6701f58d368b92555230e1e9bf5b45e7b38929a66a073fb->leave($__internal_6edc734f8e0414baa6701f58d368b92555230e1e9bf5b45e7b38929a66a073fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
