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
        $__internal_2dcda7411f5baa803f43bcd9a7a8f18f665113e87591f7ef304fe264e04d1aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dcda7411f5baa803f43bcd9a7a8f18f665113e87591f7ef304fe264e04d1aff->enter($__internal_2dcda7411f5baa803f43bcd9a7a8f18f665113e87591f7ef304fe264e04d1aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_44ef9da87b48fdc7ec01df1d973a6e22ac6e08db8fb2c4d3dd1a0d965990a7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ef9da87b48fdc7ec01df1d973a6e22ac6e08db8fb2c4d3dd1a0d965990a7c9->enter($__internal_44ef9da87b48fdc7ec01df1d973a6e22ac6e08db8fb2c4d3dd1a0d965990a7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_2dcda7411f5baa803f43bcd9a7a8f18f665113e87591f7ef304fe264e04d1aff->leave($__internal_2dcda7411f5baa803f43bcd9a7a8f18f665113e87591f7ef304fe264e04d1aff_prof);

        
        $__internal_44ef9da87b48fdc7ec01df1d973a6e22ac6e08db8fb2c4d3dd1a0d965990a7c9->leave($__internal_44ef9da87b48fdc7ec01df1d973a6e22ac6e08db8fb2c4d3dd1a0d965990a7c9_prof);

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
