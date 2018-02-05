<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_926420c518bb98c4bf365268dceb865f9ae7f99b5d3c4341b5019c04a60451ab extends Twig_Template
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
        $__internal_0253e70873a01efcd1c5e8e5e97cf86a2b73110a58ebb08ba183e9c134b7daed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0253e70873a01efcd1c5e8e5e97cf86a2b73110a58ebb08ba183e9c134b7daed->enter($__internal_0253e70873a01efcd1c5e8e5e97cf86a2b73110a58ebb08ba183e9c134b7daed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_04897e694fa23eeca27beaab45e9ac6f83d6423647e33bc5d7e3126377991191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04897e694fa23eeca27beaab45e9ac6f83d6423647e33bc5d7e3126377991191->enter($__internal_04897e694fa23eeca27beaab45e9ac6f83d6423647e33bc5d7e3126377991191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0253e70873a01efcd1c5e8e5e97cf86a2b73110a58ebb08ba183e9c134b7daed->leave($__internal_0253e70873a01efcd1c5e8e5e97cf86a2b73110a58ebb08ba183e9c134b7daed_prof);

        
        $__internal_04897e694fa23eeca27beaab45e9ac6f83d6423647e33bc5d7e3126377991191->leave($__internal_04897e694fa23eeca27beaab45e9ac6f83d6423647e33bc5d7e3126377991191_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
