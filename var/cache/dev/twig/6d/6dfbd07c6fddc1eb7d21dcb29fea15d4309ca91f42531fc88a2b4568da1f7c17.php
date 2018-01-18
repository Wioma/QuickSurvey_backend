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
        $__internal_a4e6b4a8bcaca694d8c1ea99ec72ea0100156e8741f8673241a54a85af687065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4e6b4a8bcaca694d8c1ea99ec72ea0100156e8741f8673241a54a85af687065->enter($__internal_a4e6b4a8bcaca694d8c1ea99ec72ea0100156e8741f8673241a54a85af687065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_4ecc43170c2a8143891d8dff408e9f1574a091e830c1ebec27bb86ee855be2e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ecc43170c2a8143891d8dff408e9f1574a091e830c1ebec27bb86ee855be2e1->enter($__internal_4ecc43170c2a8143891d8dff408e9f1574a091e830c1ebec27bb86ee855be2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a4e6b4a8bcaca694d8c1ea99ec72ea0100156e8741f8673241a54a85af687065->leave($__internal_a4e6b4a8bcaca694d8c1ea99ec72ea0100156e8741f8673241a54a85af687065_prof);

        
        $__internal_4ecc43170c2a8143891d8dff408e9f1574a091e830c1ebec27bb86ee855be2e1->leave($__internal_4ecc43170c2a8143891d8dff408e9f1574a091e830c1ebec27bb86ee855be2e1_prof);

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
