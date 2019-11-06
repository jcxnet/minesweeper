<?php

namespace App\Http\Controllers;

use OpenApi\Annotations\Contact;
use OpenApi\Annotations\Info;
use OpenApi\Annotations\PathItem;
use OpenApi\Annotations\Server;
use OpenApi\Annotations\Response;

/**
 *
 * @Info(
 *    version="1.0.0",
 *    title = "This is Minesweeper API",
 *     @Contact(
 *         email="jcxnet@gmail.com",
 *         name="jcxnet"
 *     )
 * )
 *
 * @Server(
 *      url="http://localhost",
 *      description= "development environment"
 * )
 *
 *
 * @package App\Http\Controllers
 */
class SwaggerController
{
    /**
     * @Get(
     *     @PathItem( path="/swagger"),
     *      description="Returns void",
     *      @Response(
     *          response=200,
     *          description="successful operation"
     *       )
     *)
     *
     * Returns void
     */
    public function index()
    {
        //silence is golden
    }
}
