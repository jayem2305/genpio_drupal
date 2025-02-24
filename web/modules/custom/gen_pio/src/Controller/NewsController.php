<?php

namespace Drupal\gen_pio\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class NewsController extends ControllerBase {

  public function newsDetail($id) {
    \Drupal::logger('gen_pio')->debug('News ID: @id', ['@id' => $id]);

    // Load the news item
    $news_item = \Drupal::entityTypeManager()->getStorage('node')->load($id);

    // Log what was loaded
    \Drupal::logger('gen_pio')->debug('Loaded news item: @item', ['@item' => print_r($news_item, TRUE)]);

    if ($news_item === NULL) {
        \Drupal::logger('gen_pio')->debug('No node found with ID: @id', ['@id' => $id]);
        return $this->buildNotFound();
    }

    // Check if it's an instance of the expected class
    if (!$news_item instanceof \Drupal\node\NodeInterface) {
        \Drupal::logger('gen_pio')->debug('Loaded item is not a node: @type', ['@type' => get_class($news_item)]);
        return $this->buildNotFound();
    }

    // Proceed if it's a valid node
    if ($news_item->getType() == 'news_content' && $news_item->isPublished()) {
        $build = [
            '#theme' => 'page__news',
            '#title' => $this->t('News'),
            'news_item' => [
                'title' => $news_item->getTitle(),
                'body' => $news_item->get('body')->value, // Get the first value from the body field
            ],
        ];
    } else {
        \Drupal::logger('gen_pio')->debug('News item not found or not published: @id', ['@id' => $id]);
        return $this->buildNotFound();
    }

    // Log the data being passed to Twig
    \Drupal::logger('gen_pio')->debug('Data passed to Twig: @data', ['@data' => print_r($build, TRUE)]);

    return $build;
}

protected function buildNotFound() {
  return [
      '#theme' => 'page__news',
      '#title' => $this->t('News Not Found'),
      'news_item' => NULL,
      '#markup' => $this->t('The requested news item could not be found.'),
  ];
}


  public function allnews() {
    // Build your page content here, if needed.
    
    $build = [
        '#theme' => 'page__all_news',
        // Add any other renderable elements here.
        '#title' => $this->t('All News'),
        // Optionally add content or blocks.
    ];

    return $build;
}

public function allevents() {
  // Build your page content here, if needed.
  
  $build = [
      '#theme' => 'page__all_events',
      // Add any other renderable elements here.
      '#title' => $this->t('All Events'),
      // Optionally add content or blocks.
  ];

  return $build;
}
public function aboutus() {
  // Build your page content here, if needed.
  
  $build = [
      '#theme' => 'page__about',
      // Add any other renderable elements here.
      '#title' => $this->t('About Us'),
      // Optionally add content or blocks.
  ];

  return $build;
}
}
