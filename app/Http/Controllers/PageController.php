<?php
namespace App\Http\Controllers;



use Laventure\Component\Cache\CacheInterface;
use Laventure\Component\Http\Request\Request;
use Laventure\Component\Http\Response\Response;
use Laventure\Foundation\Http\Controllers\Controller;


/**
 * @PageController
*/
class PageController extends Controller
{


     /**
      * @var CacheInterface
     */
     protected $cache;




    /**
      * @param CacheInterface $cache
     */
     public function __construct(CacheInterface $cache)
     {
          $this->cache = $cache;
     }




     /**
     * @param Request $request
     * @return Response
    */
    public function index(Request $request): Response
    {
         /**
         $cache = new FileCache($this->container['path'].'/temp/cache/framework');
         $cache->set('demo', 'Lorem ipsum something very good to cache.', 30);
         $cache->get('demo');
         */


         // $this->cache->set('demo', 'Lorem ipsum something very good to cache.', 30);
         // $event = new DemoEvent(); /* dd($event->getName()); */
         return view('page/index.tpl.php');
    }





    /**
     * @param $id
     * @return Response
    */
    public function show($id): Response
    {
        return view('page/show.php', ['id' => $id]);
    }




    /**
     * @return Response
    */
    public function contact(): Response
    {
        return view('page/contact.php');
    }




    /**
     * @param Request $request
     * @return Response
    */
    public function send(Request $request): Response
    {
          /* dd($request->params()); */

          $content = file_get_contents('php://input', true);

          parse_str(urldecode($content), $data);

          dump($data, $request->request->all());

          dump(json_encode($data));

          $json = json_encode($data);

          parse_str($json, $result);

          dd($result, $request->request->all());
    }
}