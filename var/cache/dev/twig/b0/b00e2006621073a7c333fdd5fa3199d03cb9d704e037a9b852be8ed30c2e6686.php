<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_ef49f90fb700fffec6419e1d5e045d981ed2bc16ad438702a669fd2dca4aa6c1 extends Twig_Template
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
        $__internal_20a2972d10d0d817e494b17d22848f676e22b94788cd256fcdc5b47ccd63f9fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a2972d10d0d817e494b17d22848f676e22b94788cd256fcdc5b47ccd63f9fb->enter($__internal_20a2972d10d0d817e494b17d22848f676e22b94788cd256fcdc5b47ccd63f9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_45abceb4aa789d3a413f8dedf763abd49f80688b6d153155f5b67d9c0d966f06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45abceb4aa789d3a413f8dedf763abd49f80688b6d153155f5b67d9c0d966f06->enter($__internal_45abceb4aa789d3a413f8dedf763abd49f80688b6d153155f5b67d9c0d966f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_20a2972d10d0d817e494b17d22848f676e22b94788cd256fcdc5b47ccd63f9fb->leave($__internal_20a2972d10d0d817e494b17d22848f676e22b94788cd256fcdc5b47ccd63f9fb_prof);

        
        $__internal_45abceb4aa789d3a413f8dedf763abd49f80688b6d153155f5b67d9c0d966f06->leave($__internal_45abceb4aa789d3a413f8dedf763abd49f80688b6d153155f5b67d9c0d966f06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
