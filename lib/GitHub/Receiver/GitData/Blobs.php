<?php
namespace GitHub\Receiver\GitData;

use Http\Request;

class Blobs extends AbstractGitData {

	/**
	 * Get a Blob
	 * @see https://developer.github.com/v3/git/blobs/#get-a-blob
	 * @param string $sha
	 * @return mixed
	 */
	public function getBlob($sha) {
		return $this->api->request(
			sprintf('/repos/%s/%s/git/blobs/%s', $this->getOwner(), $this->getRepo(), $sha)
		);
	}

	/**
	 * Create a Blob
	 * @see https://developer.github.com/v3/git/blobs/#create-a-blob
	 * @param string $content
	 * @param string $encoding
	 * @return mixed
	 */
	public function createBlob($content, $encoding) {
		return $this->api->request(
			sprintf('/repos/%s/%s/git/blobs', $this->getOwner(), $this->getRepo(), $content, $encoding),
			Request::METHOD_POST
		);
	}
}