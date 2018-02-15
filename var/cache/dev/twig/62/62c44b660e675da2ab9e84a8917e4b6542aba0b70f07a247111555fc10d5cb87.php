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
        $__internal_066aa6cbeced43ccd76e7be696f0e6df227760ac495858af68d34451cfd5922f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_066aa6cbeced43ccd76e7be696f0e6df227760ac495858af68d34451cfd5922f->enter($__internal_066aa6cbeced43ccd76e7be696f0e6df227760ac495858af68d34451cfd5922f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_b63ac1477670001ecf8ab62979ff3042fa7c87baf1a13d7b66c84043fff55b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b63ac1477670001ecf8ab62979ff3042fa7c87baf1a13d7b66c84043fff55b55->enter($__internal_b63ac1477670001ecf8ab62979ff3042fa7c87baf1a13d7b66c84043fff55b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_066aa6cbeced43ccd76e7be696f0e6df227760ac495858af68d34451cfd5922f->leave($__internal_066aa6cbeced43ccd76e7be696f0e6df227760ac495858af68d34451cfd5922f_prof);

        
        $__internal_b63ac1477670001ecf8ab62979ff3042fa7c87baf1a13d7b66c84043fff55b55->leave($__internal_b63ac1477670001ecf8ab62979ff3042fa7c87baf1a13d7b66c84043fff55b55_prof);

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
