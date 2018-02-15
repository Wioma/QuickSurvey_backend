<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c343857583bb8dd79b3c26c3e351d5528eb19132b656ef34e2049a6810886178 extends Twig_Template
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
        $__internal_bb1c5a6ba01d8b1fefeaf2b402fc8540ad5a6bd2a3884a3e832e715eaada101c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb1c5a6ba01d8b1fefeaf2b402fc8540ad5a6bd2a3884a3e832e715eaada101c->enter($__internal_bb1c5a6ba01d8b1fefeaf2b402fc8540ad5a6bd2a3884a3e832e715eaada101c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_3a5dd86ff470a6dd7a8c87058734c3abec5aee9ac9ad1a70efcb4ec822a62f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a5dd86ff470a6dd7a8c87058734c3abec5aee9ac9ad1a70efcb4ec822a62f77->enter($__internal_3a5dd86ff470a6dd7a8c87058734c3abec5aee9ac9ad1a70efcb4ec822a62f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_bb1c5a6ba01d8b1fefeaf2b402fc8540ad5a6bd2a3884a3e832e715eaada101c->leave($__internal_bb1c5a6ba01d8b1fefeaf2b402fc8540ad5a6bd2a3884a3e832e715eaada101c_prof);

        
        $__internal_3a5dd86ff470a6dd7a8c87058734c3abec5aee9ac9ad1a70efcb4ec822a62f77->leave($__internal_3a5dd86ff470a6dd7a8c87058734c3abec5aee9ac9ad1a70efcb4ec822a62f77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
