<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_97b51c709308b53649c913a0dc6997f5ad8403da1659aeb4f0f60c7312773956 extends Twig_Template
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
        $__internal_68385739d38632d6056c879340bd4c87e9ae1e2907e9cfe78696648fbe2f60e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68385739d38632d6056c879340bd4c87e9ae1e2907e9cfe78696648fbe2f60e1->enter($__internal_68385739d38632d6056c879340bd4c87e9ae1e2907e9cfe78696648fbe2f60e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_ce5db3d279772e124a96be8a332f5236efd1bff7ac3047e69af327483fd4f590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5db3d279772e124a96be8a332f5236efd1bff7ac3047e69af327483fd4f590->enter($__internal_ce5db3d279772e124a96be8a332f5236efd1bff7ac3047e69af327483fd4f590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_68385739d38632d6056c879340bd4c87e9ae1e2907e9cfe78696648fbe2f60e1->leave($__internal_68385739d38632d6056c879340bd4c87e9ae1e2907e9cfe78696648fbe2f60e1_prof);

        
        $__internal_ce5db3d279772e124a96be8a332f5236efd1bff7ac3047e69af327483fd4f590->leave($__internal_ce5db3d279772e124a96be8a332f5236efd1bff7ac3047e69af327483fd4f590_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
