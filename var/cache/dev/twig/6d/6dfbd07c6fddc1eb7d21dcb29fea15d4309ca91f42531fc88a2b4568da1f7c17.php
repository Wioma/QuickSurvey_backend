<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_e48839151c8214d267fcde6312130f47da8b6b1b554d71f8301a3b6bf239fa8f extends Twig_Template
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
        $__internal_e2b7c522d6437a6009d3d874df8ebc4887fb1a0849315181eb9c2feb25fec6d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2b7c522d6437a6009d3d874df8ebc4887fb1a0849315181eb9c2feb25fec6d5->enter($__internal_e2b7c522d6437a6009d3d874df8ebc4887fb1a0849315181eb9c2feb25fec6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_3ff0f17c8515136419006b661bd852f3f3228a8839f3dc7b5546da589aef0111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff0f17c8515136419006b661bd852f3f3228a8839f3dc7b5546da589aef0111->enter($__internal_3ff0f17c8515136419006b661bd852f3f3228a8839f3dc7b5546da589aef0111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_e2b7c522d6437a6009d3d874df8ebc4887fb1a0849315181eb9c2feb25fec6d5->leave($__internal_e2b7c522d6437a6009d3d874df8ebc4887fb1a0849315181eb9c2feb25fec6d5_prof);

        
        $__internal_3ff0f17c8515136419006b661bd852f3f3228a8839f3dc7b5546da589aef0111->leave($__internal_3ff0f17c8515136419006b661bd852f3f3228a8839f3dc7b5546da589aef0111_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
