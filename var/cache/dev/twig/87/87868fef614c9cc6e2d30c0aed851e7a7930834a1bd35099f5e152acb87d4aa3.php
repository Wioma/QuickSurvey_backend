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
        $__internal_bbb0ebbfb5f6b1c17f389074dcfd28e8fb05ab0cb91c937b956ab44c09599496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbb0ebbfb5f6b1c17f389074dcfd28e8fb05ab0cb91c937b956ab44c09599496->enter($__internal_bbb0ebbfb5f6b1c17f389074dcfd28e8fb05ab0cb91c937b956ab44c09599496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_2be75d9558f590605c018ecddf2dea262c398ecd1321c82c2801c58542abff32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be75d9558f590605c018ecddf2dea262c398ecd1321c82c2801c58542abff32->enter($__internal_2be75d9558f590605c018ecddf2dea262c398ecd1321c82c2801c58542abff32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_bbb0ebbfb5f6b1c17f389074dcfd28e8fb05ab0cb91c937b956ab44c09599496->leave($__internal_bbb0ebbfb5f6b1c17f389074dcfd28e8fb05ab0cb91c937b956ab44c09599496_prof);

        
        $__internal_2be75d9558f590605c018ecddf2dea262c398ecd1321c82c2801c58542abff32->leave($__internal_2be75d9558f590605c018ecddf2dea262c398ecd1321c82c2801c58542abff32_prof);

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
