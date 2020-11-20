<?php

declare(strict_types=1);

namespace App\Controller;


class IndexController extends AbstractController
{

    public function index()
    {
        $user   = $this->request->input('user', 'H222dhgfhfhfhgf22222222yperf');
        $method = $this->request->getMethod();

        return [
            'method'  => $method,
            'message' => "Hello {$user}.",
            'cpu_num' => swoole_cpu_num(),
        ];
    }

    public function upload(){



        return ['sadasdasfasfd'];
    }
}
