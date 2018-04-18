<?php

namespace erasys\OpenApi\Spec\v3;

/**
 * An object representing a Server.
 *
 * @see https://swagger.io/specification/#serverObject
 */
class Server extends AbstractObject
{
    /**
     * REQUIRED. A URL to the target host.
     * This URL supports Server Variables and MAY be relative,
     * to indicate that the host location is relative to the location where the OpenAPI document is being served.
     * Variable substitutions will be made when a variable is named in {brackets}.
     *
     * @var string
     */
    public $url;

    /**
     * An optional string describing the host designated by the URL.
     * CommonMark syntax MAY be used for rich text representation.
     *
     * @var string
     */
    public $description;

    /**
     * A map between a variable name and its value. The value is used for substitution in the server's URL template.
     *
     * @var ServerVariable[] array<string, ServerVariable>
     */
    public $variables;
}
