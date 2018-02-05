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
        $__internal_ca5d4bbc4dd32184948bdd60e626e9cc380104a6230124728aeeae7788c45b17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca5d4bbc4dd32184948bdd60e626e9cc380104a6230124728aeeae7788c45b17->enter($__internal_ca5d4bbc4dd32184948bdd60e626e9cc380104a6230124728aeeae7788c45b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_d10b2fcef86049860aa9b993f891a42a394214aadb79fedcf7d3e0f59bb04d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10b2fcef86049860aa9b993f891a42a394214aadb79fedcf7d3e0f59bb04d6f->enter($__internal_d10b2fcef86049860aa9b993f891a42a394214aadb79fedcf7d3e0f59bb04d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ca5d4bbc4dd32184948bdd60e626e9cc380104a6230124728aeeae7788c45b17->leave($__internal_ca5d4bbc4dd32184948bdd60e626e9cc380104a6230124728aeeae7788c45b17_prof);

        
        $__internal_d10b2fcef86049860aa9b993f891a42a394214aadb79fedcf7d3e0f59bb04d6f->leave($__internal_d10b2fcef86049860aa9b993f891a42a394214aadb79fedcf7d3e0f59bb04d6f_prof);

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
