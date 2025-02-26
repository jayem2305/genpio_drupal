<?php

namespace Drupal\gen_pio\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Drupal\Core\Url;
use Drupal\Core\Link;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\File\FileUrlGenerator;
class NewsController extends ControllerBase {

    protected $fileUrlGenerator;

    public function __construct(FileUrlGenerator $fileUrlGenerator) {
        $this->fileUrlGenerator = $fileUrlGenerator;
    }

    public static function create(ContainerInterface $container) {
        return new static(
            $container->get('file_url_generator')
        );
    }
    public function newsDetail($id) {
        \Drupal::logger('gen_pio')->debug('News ID: @id', ['@id' => $id]);
    
        // Load the specific news node by ID
        $news_item = \Drupal::entityTypeManager()->getStorage('node')->load($id);
    
        if (!$news_item) {
            \Drupal::logger('gen_pio')->debug('No node found with ID: @id', ['@id' => $id]);
            return $this->buildNotFound();
        }
    
        // Ensure it's a valid node
        if (!$news_item instanceof \Drupal\node\NodeInterface) {
            \Drupal::logger('gen_pio')->debug('Loaded item is not a node: @type', ['@type' => get_class($news_item)]);
            return $this->buildNotFound();
        }
    
        // Validate node type and publication status
        if ($news_item->getType() !== 'news_content' || !$news_item->isPublished()) {
            \Drupal::logger('gen_pio')->debug('News item not found or not published: @id', ['@id' => $id]);
            return $this->buildNotFound();
        }
    
        // Extract relevant data
        $label = $news_item->getTitle();
        $body = $news_item->get('body')->value ?? '';
        $date = $news_item->getCreatedTime();
        $formatted_date = \Drupal::service('date.formatter')->format($date, 'custom', 'F d, Y');
    
        // Handle image field
        $image_url = '';
        if ($news_item->hasField('field_news_image') && !$news_item->get('field_news_image')->isEmpty()) {
            $image = $news_item->get('field_news_image')->entity;
            if ($image instanceof \Drupal\file\FileInterface) {
                $image_url = \Drupal::service('file_url_generator')->generateAbsoluteString($image->getFileUri());
            }
        }
    
        // Build render array (Only passing the specific news item)
        $build = [
            '#theme' => 'page__event',
            '#label' => $label,
            'news_item' => [
                'id' => $id,
                'label' => $label,
                'body' => [
                    '#type' => 'processed_text',
                    '#text' => $body,
                    '#format' => $news_item->get('body')->format,
                ],
                'date' => $formatted_date,
                'image' => $image_url,
            ],
        ];
    
        \Drupal::logger('gen_pio')->debug('Data passed to Twig: @data', ['@data' => print_r($build, TRUE)]);
    
        return $build;
    }
    public function eventsDetail($id) {
        \Drupal::logger('gen_pio')->debug('News ID: @id', ['@id' => $id]);
    
        // Load the specific news node by ID
        $news_item = \Drupal::entityTypeManager()->getStorage('node')->load($id);
    
        if (!$news_item) {
            \Drupal::logger('gen_pio')->debug('No node found with ID: @id', ['@id' => $id]);
            return $this->buildNotFound();
        }
    
        // Ensure it's a valid node
        if (!$news_item instanceof \Drupal\node\NodeInterface) {
            \Drupal::logger('gen_pio')->debug('Loaded item is not a node: @type', ['@type' => get_class($news_item)]);
            return $this->buildNotFound();
        }
    
        // Validate node type and publication status
        if ($news_item->getType() !== 'events_contents' || !$news_item->isPublished()) {
            \Drupal::logger('gen_pio')->debug('News item not found or not published: @id', ['@id' => $id]);
            return $this->buildNotFound();
        }
    
        // Extract relevant data
        $label = $news_item->getTitle();
        $body = $news_item->get('body')->value ?? '';
        $date = $news_item->getCreatedTime();
        $formatted_date = \Drupal::service('date.formatter')->format($date, 'custom', 'F d, Y');
    
        // Handle image field
        $image_url = '';
        if ($news_item->hasField('field_news_image') && !$news_item->get('field_news_image')->isEmpty()) {
            $image = $news_item->get('field_news_image')->entity;
            if ($image instanceof \Drupal\file\FileInterface) {
                $image_url = \Drupal::service('file_url_generator')->generateAbsoluteString($image->getFileUri());
            }
        }
    
        // Build render array (Only passing the specific news item)
        $build = [
            '#theme' => 'page__news',
            '#label' => $label,
            'news_item' => [
                'id' => $id,
                'label' => $label,
                'body' => [
                    '#type' => 'processed_text',
                    '#text' => $body,
                    '#format' => $news_item->get('body')->format,
                ],
                'date' => $formatted_date,
                'image' => $image_url,
            ],
        ];
    
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
public function brgy_officials() {
    return [
        '#theme' => 'page__officials',  // This should match your template file.
        '#title' => $this->t('Barangay Officials'),
    ];
}

public function brgy_SKofficials() {
    return [
        '#theme' => 'page__Skofficials',  // This should match your template file.
        '#title' => $this->t('Barangay SKOfficials'),
    ];
}
}
