<?php declare(strict_types=1);

/**
 *  Website: https://mudew.com/
 *  Author: Lkeme
 *  License: The MIT License
 *  Email: Useri@live.cn
 *  Updated: 2018 ~ 2026
 *
 *   _____   _   _       _   _   _   _____   _       _____   _____   _____
 *  |  _  \ | | | |     | | | | | | | ____| | |     |  _  \ | ____| |  _  \ &   ／l、
 *  | |_| | | | | |     | | | |_| | | |__   | |     | |_| | | |__   | |_| |   （ﾟ､ ｡ ７
 *  |  _  { | | | |     | | |  _  | |  __|  | |     |  ___/ |  __|  |  _  /  　 \、ﾞ ~ヽ   *
 *  | |_| | | | | |___  | | | | | | | |___  | |___  | |     | |___  | | \ \   　じしf_, )ノ
 *  |_____/ |_| |_____| |_| |_| |_| |_____| |_____| |_|     |_____| |_|  \_\
 */
trait ViewAnimate
{
    use CommonTaskInfo;

    /**
     * @param array $data
     * @param string $name
     * @return bool
     */
    public function viewAnimate(array $data, string $name): bool
    {
        $title = '日常任务';
        $code = 'animatetab';
        $channel = 'jp_channel';
        //
        if ($this->isComplete($data, $name, $title, $code)) {
            return true;
        }
        //
        $this->worker($data, $name, $title, $code, 2, $channel);
        return false;
    }


}
