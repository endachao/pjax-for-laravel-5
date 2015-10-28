<?php
/**
 * User: 袁超<yccphp@163.com>
 * Time: 2015.10.28 下午12:05
 */

namespace YuanChao\Pjax;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\DomCrawler\Crawler;

class EndaPjaxMiddleware
{

    public function handle($request, Closure $next)
    {
        $response = $next($request);
        if (!$response->isRedirection()) {
            if ($request->pjax()) {
                $crawler = new Crawler($response->getContent());
                $response_title = $crawler->filter('head > title');
                $response_container = $crawler->filter($request->header('X-PJAX-CONTAINER'));
                if ($response_container->count() != 0) {
                    $title = '';
                    if ($response_title->count() != 0) {
                        $title = '<title>' . $response_title->html() . '</title>';
                    }
                    $response->setContent($title . $response_container->html());
                }
                $response->header('X-PJAX-URL', $request->getRequestUri());
            }
        }
        return $response;
    }
}