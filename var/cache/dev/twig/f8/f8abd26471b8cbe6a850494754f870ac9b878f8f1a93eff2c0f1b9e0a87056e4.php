<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_efa47a9aedbd262bc45d6279a0f200ab7a2091ba5670dee4a3d917936763fb1e extends Twig_Template
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
        $__internal_58f77fcba47a3e07e52d8b47ce76cdb4482b019d2fc7f127a94f9a5893c6e9c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58f77fcba47a3e07e52d8b47ce76cdb4482b019d2fc7f127a94f9a5893c6e9c0->enter($__internal_58f77fcba47a3e07e52d8b47ce76cdb4482b019d2fc7f127a94f9a5893c6e9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_21c2fc2fcb75da5619af6aea85abf7774b49b3641b593e28c9e4fdfcd9c13f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c2fc2fcb75da5619af6aea85abf7774b49b3641b593e28c9e4fdfcd9c13f3b->enter($__internal_21c2fc2fcb75da5619af6aea85abf7774b49b3641b593e28c9e4fdfcd9c13f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_58f77fcba47a3e07e52d8b47ce76cdb4482b019d2fc7f127a94f9a5893c6e9c0->leave($__internal_58f77fcba47a3e07e52d8b47ce76cdb4482b019d2fc7f127a94f9a5893c6e9c0_prof);

        
        $__internal_21c2fc2fcb75da5619af6aea85abf7774b49b3641b593e28c9e4fdfcd9c13f3b->leave($__internal_21c2fc2fcb75da5619af6aea85abf7774b49b3641b593e28c9e4fdfcd9c13f3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
