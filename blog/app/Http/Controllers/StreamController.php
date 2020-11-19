<?php


namespace App\Http\Controllers;

use Raju\Streamer\Helpers\VideoStream;

class StreamController
{
	public function stream($filename)
	{
		$videosDir = config('larastreamer.basepath');
		if (file_exists($filePath = $videosDir . "/" . $filename)) {
			$stream = new VideoStream($filePath);
			return response()->stream(function () use ($stream) {
				$stream->start();
			});
		}
		return response("File doesn't exists", 404);
	}
}