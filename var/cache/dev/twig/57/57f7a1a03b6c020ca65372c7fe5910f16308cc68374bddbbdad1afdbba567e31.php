<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_09149888619e5b5d37ce8ee94dce7a9cc799d59e723eda801e30ea2318164411 extends Twig_Template
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
        $__internal_a424775ffdb4ac7c925090f2d72544efe7abafc4b793caaf0d1a6e4d21ed8de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a424775ffdb4ac7c925090f2d72544efe7abafc4b793caaf0d1a6e4d21ed8de1->enter($__internal_a424775ffdb4ac7c925090f2d72544efe7abafc4b793caaf0d1a6e4d21ed8de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_74f3fd002638054ed067f8f10f9379c32f6ea2ee669c2398c89af48aca261b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f3fd002638054ed067f8f10f9379c32f6ea2ee669c2398c89af48aca261b2c->enter($__internal_74f3fd002638054ed067f8f10f9379c32f6ea2ee669c2398c89af48aca261b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_a424775ffdb4ac7c925090f2d72544efe7abafc4b793caaf0d1a6e4d21ed8de1->leave($__internal_a424775ffdb4ac7c925090f2d72544efe7abafc4b793caaf0d1a6e4d21ed8de1_prof);

        
        $__internal_74f3fd002638054ed067f8f10f9379c32f6ea2ee669c2398c89af48aca261b2c->leave($__internal_74f3fd002638054ed067f8f10f9379c32f6ea2ee669c2398c89af48aca261b2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
